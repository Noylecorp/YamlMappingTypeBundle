<?php

namespace Noylecorp\DoctrineExtrasBundle\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Symfony\Component\Yaml\Yaml;

class YamlArrayType extends Type
{
    const YAML_ARRAY = 'yaml_array';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getClobTypeDeclarationSQL($fieldDeclaration);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (null === $value) {
            return null;
        }

        return Yaml::dump($value, 5);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null || $value === '') {
            return array();
        }

        $value = (is_resource($value)) ? stream_get_contents($value) : $value;

        return Yaml::parse($value);
    }

    public function getName()
    {
        return $this::YAML_ARRAY;
    }
}
