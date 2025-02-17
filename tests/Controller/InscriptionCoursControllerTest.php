<?php

namespace App\Tests\Controller;

use App\Entity\InscriptionCours;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class InscriptionCoursControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $inscriptionCourRepository;
    private string $path = '/inscription/cours/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->inscriptionCourRepository = $this->manager->getRepository(InscriptionCours::class);

        foreach ($this->inscriptionCourRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('InscriptionCour index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'inscription_cour[status]' => 'Testing',
            'inscription_cour[dateInscreption]' => 'Testing',
            'inscription_cour[montant]' => 'Testing',
            'inscription_cour[typePaiement]' => 'Testing',
            'inscription_cour[nomApprenant]' => 'Testing',
            'inscription_cour[nomFormation]' => 'Testing',
            'inscription_cour[apprenant]' => 'Testing',
            'inscription_cour[formation]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->inscriptionCourRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new InscriptionCours();
        $fixture->setStatus('My Title');
        $fixture->setDateInscreption('My Title');
        $fixture->setMontant('My Title');
        $fixture->setTypePaiement('My Title');
        $fixture->setNomApprenant('My Title');
        $fixture->setNomFormation('My Title');
        $fixture->setApprenant('My Title');
        $fixture->setFormation('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('InscriptionCour');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new InscriptionCours();
        $fixture->setStatus('Value');
        $fixture->setDateInscreption('Value');
        $fixture->setMontant('Value');
        $fixture->setTypePaiement('Value');
        $fixture->setNomApprenant('Value');
        $fixture->setNomFormation('Value');
        $fixture->setApprenant('Value');
        $fixture->setFormation('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'inscription_cour[status]' => 'Something New',
            'inscription_cour[dateInscreption]' => 'Something New',
            'inscription_cour[montant]' => 'Something New',
            'inscription_cour[typePaiement]' => 'Something New',
            'inscription_cour[nomApprenant]' => 'Something New',
            'inscription_cour[nomFormation]' => 'Something New',
            'inscription_cour[apprenant]' => 'Something New',
            'inscription_cour[formation]' => 'Something New',
        ]);

        self::assertResponseRedirects('/inscription/cours/');

        $fixture = $this->inscriptionCourRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getStatus());
        self::assertSame('Something New', $fixture[0]->getDateInscreption());
        self::assertSame('Something New', $fixture[0]->getMontant());
        self::assertSame('Something New', $fixture[0]->getTypePaiement());
        self::assertSame('Something New', $fixture[0]->getNomApprenant());
        self::assertSame('Something New', $fixture[0]->getNomFormation());
        self::assertSame('Something New', $fixture[0]->getApprenant());
        self::assertSame('Something New', $fixture[0]->getFormation());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new InscriptionCours();
        $fixture->setStatus('Value');
        $fixture->setDateInscreption('Value');
        $fixture->setMontant('Value');
        $fixture->setTypePaiement('Value');
        $fixture->setNomApprenant('Value');
        $fixture->setNomFormation('Value');
        $fixture->setApprenant('Value');
        $fixture->setFormation('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/inscription/cours/');
        self::assertSame(0, $this->inscriptionCourRepository->count([]));
    }
}
