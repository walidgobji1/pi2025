<?php

declare(strict_types=1);

namespace Doctrine\Tests\ORM\Functional\Ticket;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Tests\OrmFunctionalTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('DDC-1335')]
class DDC1335Test extends OrmFunctionalTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->createSchemaForModels(DDC1335User::class, DDC1335Phone::class);
        try {
            $this->loadFixture();
        } catch (UniqueConstraintViolationException) {
        }
    }

    public function testDql(): void
    {
        $dql    = 'SELECT u FROM ' . __NAMESPACE__ . '\DDC1335User u INDEX BY u.id';
        $query  = $this->_em->createQuery($dql);
        $result = $query->getResult();

        self::assertCount(3, $result);
        self::assertArrayHasKey(1, $result);
        self::assertArrayHasKey(2, $result);
        self::assertArrayHasKey(3, $result);

        $dql    = 'SELECT u, p FROM ' . __NAMESPACE__ . '\DDC1335User u INDEX BY u.email INNER JOIN u.phones p INDEX BY p.id';
        $query  = $this->_em->createQuery($dql);
        $result = $query->getResult();

        self::assertCount(3, $result);
        self::assertArrayHasKey('foo@foo.com', $result);
        self::assertArrayHasKey('bar@bar.com', $result);
        self::assertArrayHasKey('foobar@foobar.com', $result);

        self::assertCount(3, $result['foo@foo.com']->phones);
        self::assertCount(3, $result['bar@bar.com']->phones);
        self::assertCount(3, $result['foobar@foobar.com']->phones);

        $foo    = $result['foo@foo.com']->phones->toArray();
        $bar    = $result['bar@bar.com']->phones->toArray();
        $foobar = $result['foobar@foobar.com']->phones->toArray();

        self::assertArrayHasKey(1, $foo);
        self::assertArrayHasKey(2, $foo);
        self::assertArrayHasKey(3, $foo);

        self::assertArrayHasKey(4, $bar);
        self::assertArrayHasKey(5, $bar);
        self::assertArrayHasKey(6, $bar);

        self::assertArrayHasKey(7, $foobar);
        self::assertArrayHasKey(8, $foobar);
        self::assertArrayHasKey(9, $foobar);
    }

    public function testTicket(): void
    {
        $builder = $this->_em->createQueryBuilder();
        $builder->select('u')->from(DDC1335User::class, 'u', 'u.id');

        $dql    = $builder->getQuery()->getDQL();
        $result = $builder->getQuery()->getResult();

        self::assertCount(3, $result);
        self::assertArrayHasKey(1, $result);
        self::assertArrayHasKey(2, $result);
        self::assertArrayHasKey(3, $result);
        self::assertEquals('SELECT u FROM ' . __NAMESPACE__ . '\DDC1335User u INDEX BY u.id', $dql);
    }

    public function testIndexByUnique(): void
    {
        $builder = $this->_em->createQueryBuilder();
        $builder->select('u')->from(DDC1335User::class, 'u', 'u.email');

        $dql    = $builder->getQuery()->getDQL();
        $result = $builder->getQuery()->getResult();

        self::assertCount(3, $result);
        self::assertArrayHasKey('foo@foo.com', $result);
        self::assertArrayHasKey('bar@bar.com', $result);
        self::assertArrayHasKey('foobar@foobar.com', $result);
        self::assertEquals('SELECT u FROM ' . __NAMESPACE__ . '\DDC1335User u INDEX BY u.email', $dql);
    }

    public function testIndexWithJoin(): void
    {
        $builder = $this->_em->createQueryBuilder();
        $builder->select('u', 'p')
                ->from(DDC1335User::class, 'u', 'u.email')
                ->join('u.phones', 'p', null, null, 'p.id');

        $dql    = $builder->getQuery()->getDQL();
        $result = $builder->getQuery()->getResult();

        self::assertCount(3, $result);
        self::assertArrayHasKey('foo@foo.com', $result);
        self::assertArrayHasKey('bar@bar.com', $result);
        self::assertArrayHasKey('foobar@foobar.com', $result);

        self::assertCount(3, $result['foo@foo.com']->phones);
        self::assertCount(3, $result['bar@bar.com']->phones);
        self::assertCount(3, $result['foobar@foobar.com']->phones);

        self::assertArrayHasKey(1, $result['foo@foo.com']->phones->toArray());
        self::assertArrayHasKey(2, $result['foo@foo.com']->phones->toArray());
        self::assertArrayHasKey(3, $result['foo@foo.com']->phones->toArray());

        self::assertArrayHasKey(4, $result['bar@bar.com']->phones->toArray());
        self::assertArrayHasKey(5, $result['bar@bar.com']->phones->toArray());
        self::assertArrayHasKey(6, $result['bar@bar.com']->phones->toArray());

        self::assertArrayHasKey(7, $result['foobar@foobar.com']->phones->toArray());
        self::assertArrayHasKey(8, $result['foobar@foobar.com']->phones->toArray());
        self::assertArrayHasKey(9, $result['foobar@foobar.com']->phones->toArray());

        self::assertEquals('SELECT u, p FROM ' . __NAMESPACE__ . '\DDC1335User u INDEX BY u.email INNER JOIN u.phones p INDEX BY p.id', $dql);
    }

    private function loadFixture(): void
    {
        $p1 = ['11 xxxx-xxxx', '11 yyyy-yyyy', '11 zzzz-zzzz'];
        $p2 = ['22 xxxx-xxxx', '22 yyyy-yyyy', '22 zzzz-zzzz'];
        $p3 = ['33 xxxx-xxxx', '33 yyyy-yyyy', '33 zzzz-zzzz'];

        $u1 = new DDC1335User('foo@foo.com', 'Foo', $p1);
        $u2 = new DDC1335User('bar@bar.com', 'Bar', $p2);
        $u3 = new DDC1335User('foobar@foobar.com', 'Foo Bar', $p3);

        $this->_em->persist($u1);
        $this->_em->persist($u2);
        $this->_em->persist($u3);
        $this->_em->flush();
        $this->_em->clear();
    }
}

#[Entity]
class DDC1335User
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue]
    public int|null $id = null;

    /** @phpstan-var Collection<int, DDC1335Phone> */
    #[OneToMany(targetEntity: 'DDC1335Phone', mappedBy: 'user', cascade: ['persist', 'remove'])]
    public Collection $phones;

    public function __construct(
        #[Column(type: 'string', length: 255, unique: true)]
        public string $email,
        #[Column(type: 'string', length: 255)]
        public string $name,
        array $numbers = [],
    ) {
        $this->phones = new ArrayCollection();

        foreach ($numbers as $number) {
            $this->phones->add(new DDC1335Phone($this, $number));
        }
    }
}

#[Entity]
class DDC1335Phone
{
    #[Id]
    #[Column(name: 'id', type: 'integer')]
    #[GeneratedValue]
    public int|null $id = null;

    public function __construct(
        #[ManyToOne(targetEntity: 'DDC1335User', inversedBy: 'phones')]
        #[JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
        public DDC1335User $user,
        #[Column(name: 'numericalValue', type: 'string', nullable: false)]
        public string $numericalValue,
    ) {
    }
}
