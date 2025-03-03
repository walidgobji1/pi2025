<?php

declare(strict_types=1);

namespace Doctrine\Tests\ORM\Mapping;

use Doctrine\ORM\Mapping\AssociationMapping;
use Doctrine\ORM\Mapping\ToManyAssociationMapping;
use Doctrine\ORM\Mapping\ToManyAssociationMappingImplementation;
use PHPUnit\Framework\TestCase;

use function assert;
use function serialize;
use function unserialize;

final class ToManyAssociationMappingTest extends TestCase
{
    public function testItSurvivesSerialization(): void
    {
        $mapping = new MyToManyAssociationMapping(
            fieldName: 'foo',
            sourceEntity: self::class,
            targetEntity: self::class,
        );

        $mapping->indexBy = 'foo';
        $mapping->orderBy = ['foo' => 'asc'];

        $resurrectedMapping = unserialize(serialize($mapping));
        assert($resurrectedMapping instanceof ToManyAssociationMapping);

        self::assertSame('foo', $resurrectedMapping->fieldName);
        self::assertSame(['foo' => 'asc'], $resurrectedMapping->orderBy);
    }
}

class MyToManyAssociationMapping extends AssociationMapping implements ToManyAssociationMapping
{
    use ToManyAssociationMappingImplementation;
}
