# 📘 Documentation du Module d’Évaluation

## 🌟 Vue d’ensemble
Le module `Evaluation` dans cette application Symfony est conçu pour évaluer les CV des instructeurs, générant un score numérique, déterminant un niveau de compétence (`niveau`) et évaluant un statut d’acceptation (`status`) en fonction des données du CV. Il s’intègre avec des API externes (Affinda pour l’analyse des CV et Flask pour le scoring basé sur l’apprentissage automatique) afin de fournir un système d’évaluation robuste pour l’entité `Instructeur`, sans nécessiter de modifications du schéma de base de données existant.

## 🎯 Objectif
Le module automatise l’évaluation des CV des instructeurs pour évaluer leurs qualifications, compétences et expérience, en attribuant un score (0-100), un niveau de compétence (Débutant, Intermédiaire, Avancé) et un statut d’acceptation (accepté ou non accepté). Cela permet une prise de décision efficace pour l’inscription et l’intégration des instructeurs dans l’application.

## 🚀 Fonctionnalités Clés
- **Analyse des CV avec l’API Affinda** :
  - Extrait l’éducation, les années d’expérience, les compétences et les certifications des CV téléchargés via l’API Affinda.
  - Stocke les données analysées dans les champs de l’entité `Evaluation` : `education`, `yearsOfExperience`, `skills` et `certifications`.

- **Scoring avec l’API Flask** :
  - S’intègre à une API Flask basée sur l’apprentissage automatique (disponible dans ce dépôt : [cv-score-model](https://github.com/amenibenabdallah/cv-score-model)) pour générer un score numérique (0-100) en fonction des caractéristiques du CV (par exemple, niveau d’éducation, années d’expérience, nombre de compétences, nombre de certifications).
  - Le score est persistant dans le champ `score` de l’entité `Evaluation`.

- **Niveau de Compétence (Niveau)** :
  - Détermine dynamiquement le `niveau` (niveau de compétence) basé sur le score de l’API Flask :
    - **Débutant** : Score < 50
    - **Intermédiaire** : 50 ≤ Score < 80
    - **Avancé** : Score ≥ 80
  - Stocké et mis à jour dans le champ `niveau` de l’entité `Evaluation`.

- **Statut d’Acceptation (Status)** :
  - Simule un statut d’acceptation basé sur le score, logué mais non persistant dans la base de données (en raison des contraintes du schéma) :
    - **Accepté** : Score ≥ 70
    - **Non Accepté** : Score < 70
  - Logué via le logger de Symfony pour le suivi et la prise de décision dans le flux de l’application.

- **Aucune Modification du Schéma de la Base de Données** :
  - Utilise les champs existants de l’entité `Evaluation` (`score`, `niveau`, etc.) sans altérer la structure de la base de données MySQL `formini3`.

- **Création Automatique via InstructeurListener** :
  - Une entité `Evaluation` est créée automatiquement pour chaque nouvel `Instructeur` via l’écouteur `App\EventListener\InstructeurListener`, déclenché par l’événement `postPersist` de Doctrine après la persistance d’un `Instructeur`. Cet écouteur utilise `EvaluationService` pour générer l’évaluation du CV.

## 🛠 Détails d’Implémentation
### Service
- **Classe** : `App\Service\EvaluationService`
- **Fonctionnalités** :
  - Gère l’analyse des CV via Affinda, le scoring via Flask, et la définition de `niveau` et `status`.
  - Utilise l’injection de dépendances pour `HttpClientInterface`, `EntityManagerInterface`, une clé API Affinda, une clé API Flask et `LoggerInterface`.
  - Configuré dans `config/services.yaml` avec les variables d’environnement du `.env`.

### Entité
- **Classe** : `App\Entity\Evaluation`
- **Champs** :
  - `id`, `score`, `niveau`, `dateCreation`, `education`, `yearsOfExperience`, `skills`, `certifications`, `instructor_id`.
- **Relation** :
  - Liée à l’entité `Instructeur` via une relation ManyToOne.

### Intégration des API
- **API Affinda** :
  - Analyse les CV à l’aide d’une clé API configurée dans `.env`.
- **API Flask** :
  - Prédit les scores à `http://localhost:5000/predict_cv_score` en utilisant un en-tête `X-API-Key` configuré dans `.env`.
  - Le payload inclut `education_level`, `years_of_experience`, `skills_count` et `certifications_count` sous forme de nombres à virgule flottante.

### Configuration
- Nécessite des clés API pour Affinda et Flask dans `C:\Users\LENOVO\Desktop\PIDEV\pi2025\.env` (non incluses ici pour des raisons de sécurité).
- Utilise `cv_score_model.pkl` dans `C:\Users\LENOVO\Desktop\cv_ml\` pour les prédictions de l’API Flask.
- Les fichiers CV sont stockés dans `C:/Users/LENOVO/Desktop/PIDEV/pi2025/public/uploads/cv/`.

### Écouteur (InstructeurListener)
- **Classe** : `App\EventListener\InstructeurListener`
- **Fonctionnalité** :
  - Écoute l’événement `postPersist` de Doctrine pour détecter la création d’un nouvel `Instructeur`.
  - Appelle `EvaluationService::createEvaluationFromCv` pour générer automatiquement une évaluation du CV associé à l’`Instructeur`.
- **Configuration** :
  - Définie dans `config/services.yaml` avec le tag `doctrine.event_listener` pour l’événement `postPersist`.

## 🚶‍♂️ Utilisation
1. **Inscription d’un Instructeur** :
   - Envoyez une requête POST à `http://127.0.0.1:8000/register_instructeur?role=instructeur` avec un corps JSON contenant `email`, `nom`, `prenom`, `date_de_naissance` et `cv` (par exemple, `67c185c67c2ba.pdf`).
   - Exemple :
     ```json
     {
         "email": "[benabdallah2ameni@gmail.com](mailto:benabdallah2ameni@gmail.com)",
         "nom": "ben abdallah",
         "prenom": "ameni",
         "date_de_naissance": "2025-02-28",
         "cv": "67c185c67c2ba.pdf"
     }
1. **Processus d’Évaluation** :
    - Le EvaluationService analyse le CV avec Affinda, génère un score via Flask, et définit niveau et status.
    - Les journaux sont disponibles dans var/log/dev.log pour le débogage, affichant score, niveau (par exemple, « Avancé ») et status (par exemple, « accepté »).
3. **Résultat** :
    - La base de données reflète score (par exemple, 100.0), niveau (par exemple, « Avancé ») et les autres champs  dans la table evaluation.
    
## ✅ Dépendances
- **API Externes** :
  - API Affinda (clé configurée dans `.env`, non divulguée ici).
  - API Flask (disponible dans [cv-score-model](https://github.com/amenibenabdallah/cv-score-model), locale à `http://localhost:5000`, authentifiée avec une clé configurée dans `.env`).
- **Bibliothèques Python** (pour Flask) :
  - `flask`
  - `flask_sslify`
  - `python-dotenv`
  - `pickle`
  - `numpy`.

## 🧪 Test
- Utilisez Postman pour tester l’end-point `/register_instructeur`, en vous assurant que les fichiers CV sont dans `public/uploads/cv/`.
- Vérifiez les journaux dans `var/log/dev.log` pour `Evaluation Status` et `Evaluation Niveau`.
- Consultez la base de données avec `php bin/console doctrine:query:sql "SELECT * FROM evaluation WHERE id = <id>"` pour confirmer `score` et `niveau`.

## ℹ Remarques
- Le module évite les modifications du schéma de la base de données, simulant `status` via les journaux et utilisant les champs existants `niveau` et `score`.
- Assurez-vous que Flask est en exécution (`python cv_score_api.py`) et que `cv_score_model.pkl` est correctement entraîné pour prédire les scores (par exemple, `100` pour le payload donné).
- Ajustez les seuils pour `status` (par exemple, `>= 70`) et `niveau` (par exemple, `< 50`, `50-79`, `>= 80`) dans `EvaluationService.php` si nécessaire.

## 📧 Contact
Pour toute question ou problème, contactez l’équipe de développement à [benabdallah2ameni@gmail.com](mailto:benabdallah2ameni@gmail.com), responsable du module d’évaluation, ou consultez le dépôt Git pour plus de détails.

# 📘 Documentation du Module de Gestion d'avis (Avis)

## 🌟 Vue d’ensemble
Le module `Gestion d'Avis` dans cette application Symfony est conçu pour gérer les avis des utilisateurs sur des formations, permettant aux apprenants authentifiés (rôle `ROLE_APPRENANT`) de noter les formations avec un système d’étoiles sur 5. Il calcule un score moyen pour chaque formation basé sur la somme des notes des avis divisée par leur nombre. Le module s’intègre avec des APIs externes (LanguageTool pour l’autocorrection, Google Translate pour la traduction, et Sightengine pour la modération) pour offrir une expérience robuste et automatisée.

## 🎯 Objectif
Le module automatise la gestion des avis utilisateurs, attribue des notes sur 5 via un système d’étoiles, et calcule un score moyen pour chaque formation. Il crée une entité `FormationScore` au premier avis et met à jour ce score lors de l’ajout, la modification ou la suppression d’avis, facilitant l’évaluation des formations dans l’application. Seuls les utilisateurs authentifiés avec le rôle `ROLE_APPRENANT` peuvent ajouter des avis, garantissant une restriction d’accès.

## 🚀 Fonctionnalités Clés
- **Gestion des Avis avec Notation par Étoiles** :
  - Les apprenants authentifiés (`ROLE_APPRENANT`) soumettent des avis avec une note sur 5 (étoiles) via un formulaire sécurisé.
  - Les avis sont liés à une formation spécifique et stockés dans l’entité `Avis`.

- **Calcul du Score de Formation** :
  - Crée une table `FormationScore` au premier avis pour une formation avec `noteMoyenne` (moyenne des notes) et `nombreAvis`.
  - **Ajout** : `noteMoyenne = (noteMoyenne * nombreAvis + nouvelleNote) / (nombreAvis + 1)`.
  - **Modification** : `noteMoyenne = ((noteMoyenne * nombreAvis) - ancienneNote + nouvelleNote) / nombreAvis`.
  - **Suppression** : `noteMoyenne = ((noteMoyenne * nombreAvis) - noteSupprimée) / (nombreAvis - 1)`; `0` si aucun avis restant.
  - Stocke et met à jour `noteMoyenne`, `nombreAvis`, et `classement` dans `FormationScore`.

- **Autocorrection avec l’API LanguageTool** :
  - Corrige en temps réel les fautes d’orthographe dans les commentaires via l’API LanguageTool (ex. "parceque" → "parce que").
  - Appelée via la route `/avis/spellcheck`.

- **Traduction avec l’API Google Translate** :
  - Traduit les commentaires des avis du français vers l’anglais via une API non officielle (ex. "Je suis fatigué" → "I am tired").
  - Accessible via `/avis/translate/{id}`.

- **Modération avec l’API Sightengine** :
  - Analyse les avis en backoffice pour détecter les contenus inappropriés (insultes, grossièretés, etc.), avec mise en cache des résultats.
  - Met à jour les champs `isFlagged` et `flaggedReason` dans `Avis`.
  - L'admin peut supprimer les avis flaggees 

## 🛠 Détails d’Implémentation

### Contrôleurs
- **Classe** : `App\Controller\AvisController`
  - Gère les routes front-end pour les avis et les fonctionnalités d’autocorrection/traduction.
- **Classe** : `App\Controller\FormationScoreController`
  - Gère les routes back-office et la modération des avis.

### Entités
- **Classe** : `App\Entity\Avis`
  - Champs : `id`, `note` (1-5), `commentaire`, `dateCreation`, `formation`, `apprenant`, `formationScore`, `isFlagged`, `flaggedReason`.
  - Relation : `ManyToOne` avec `Formation` et `FormationScore`.
- **Classe** : `App\Entity\FormationScore`
  - Champs : `id`, `noteMoyenne`, `nombreAvis`, `classement`, `formation`.
  - Relation : `OneToMany` avec `Avis`.

### Intégration des APIs
- **LanguageTool** : `https://api.languagetool.org/v2/check` (autocorrection).
- **Google Translate** : `https://translate.googleapis.com/translate_a/single` (traduction).
- **Sightengine** : `https://api.sightengine.com/1.0/text/check.json` (modération, nécessite clés API dans `.env`).

### Configuration
- Nécessite des clés API Sightengine dans `.env` :
  - **SIGHTENGINE_API_USER**
  - **SIGHTENGINE_API_SECRET**
## Les Templates Twig
Les templates Twig (`new.html.twig`, `index.html.twig`, etc.) pour le frontoffice sont situés dans le dossier `templates/avis/`.Aussi `AvisEtScore.html.twig` et `formation_avis.html.twig` pour le backoffice sont situés dans le dossier `templates/admin/`

- Accédez à la page d’ajout d’avis pour une formation spécifique via l’interface utilisateur (par exemple, "Ajouter un avis" depuis la liste des formations).
- Connectez-vous en tant qu’apprenant authentifié avec le rôle `ROLE_APPRENANT`.
- Attribuez une note en utilisant le système d’étoiles (1 à 5), rédigez votre commentaire (ex. "Je suis tres fatigé"), et observez l’autocorrection en "Je suis très fatiguée" après une courte pause.
- Le score moyen de la formation est automatiquement créé ou mis à jour dans la base de données.

### Lister les Avis
- Consultez la liste des avis d’une formation depuis la page dédiée dans l’application pour voir les commentaires des utilisateurs et le score moyen.

### Traduire un Avis
- Utilisez la fonctionnalité de traduction intégrée dans l’interface pour convertir un commentaire en anglais (par exemple, en cliquant sur "Traduire" pour un avis spécifique).

### Modérer un Avis
- En tant qu’administrateur, accédez à la section de feedback dans le back-office pour examiner supprimer les avis inappropriés.
## ✅ Dépendances
- **PHP** : 8.x
- **Symfony** : 6.4+
- **Doctrine ORM** : Pour la gestion de la base de données.
- **Symfony HttpClient** : Pour les appels API.
- **APIs Externes** :
  - LanguageTool (gratuit).
  - Google Translate (non officiel).
  - Sightengine (clé API requise).

## 🧪 Tests

### ✨ Autocorrection Magique
- **Entrée** : "Je suis tres fatigé aprés une longue journé de travaille."
- **Résultat attendu** : "Je suis très fatigué après une longue journée de travail."
- **Comment tester** : Connectez-vous comme apprenant, ouvrez le formulaire d’ajout d’avis, tapez la phrase et regardez la magie opérer après 500ms—votre texte sera corrigé automatiquement !

### 🌟 Score des Formations
- **Scénario** :
  1. Ajoutez un premier avis avec une note de 4 étoiles → Le score devient 4/5, avec 1 avis.
  2. Ajoutez un second avis avec 3 étoiles → Le score passe à 3.5/5, avec 2 avis.
  3. Supprimez le premier avis → Le score revient à 3/5, avec 1 avis.
- **Comment tester** : Utilisez l’interface pour ajouter et supprimer des avis, puis vérifiez le score mis à jour dans la liste des formations.
### 🌍 Traduction Instantanée
- **Entrée** : Un avis avec le commentaire "C’est une excellente formation !"
- **Résultat attendu** : "This is an excellent training!"
- **Comment tester** : Ajoutez un avis via le formulaire, puis utilisez la fonction de traduction dans l’interface (ou via un appel API si intégré dans l’UI) pour voir le commentaire traduit en anglais—un petit voyage linguistique en un clic !

## ℹ Remarques
- Seuls les utilisateurs authentifiés avec `ROLE_APPRENANT` peuvent ajouter des avis, vérifié dans `AvisController::addAvis`.
- Le score est recalculé dynamiquement lors des opérations CRUD sur les avis.
- LanguageTool est limité à ~20 requêtes/minute (niveau gratuit)—surveillez ou hébergez localement pour un usage intensif.
- Les notes sont saisies via un système d’étoiles dans `AvisType`, mappé à l’entité `Avis`.

## 📧 Contact
Pour toute question ou problème, contactez l’équipe de développement à [benabdallah2ameni@gmail.com](mailto:benabdallah2ameni@gmail.com), responsable de Gestion d'avis , ou consultez le dépôt Git pour plus de détails.