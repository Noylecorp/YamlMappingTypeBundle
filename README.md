# noylecorp/doctrine-extras-bundle

Symfony 2 bundle providing extras for Doctrine:

`yaml_array` custom mapping type (similar to json_array)

## Installation

Via `composer`

    $ composer require noylecorp/doctrine-extras-bundle

## Configuration

**Using custom mapping types**

    # app/config/config.yml
    doctrine:
        dbal:
            types:
                yaml_array:  Noylecorp\DoctrineExtrasBundle\Types\YamlArrayType
