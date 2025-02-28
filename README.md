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
- **Bundles Symfony** :
  - `symfony/framework-bundle`
  - `doctrine/doctrine-bundle`
  - `symfony/messenger`
  - `symfony/mailer`
  - `symfony/monolog-bundle` (pour les journaux).
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