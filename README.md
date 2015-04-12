# noylecorp/doctrine-extras-bundle

Bundle providing extras for Symfony2 Doctrine:

* yaml_array mapping type (similar to json_array)

## Install

Add custom type(s) to Doctrine configuration:

    # app/config/config.yml
    doctrine:
        dbal:
            types:
                yaml_array:  Noylecorp\DoctrineExtrasBundle\Types\YamlArrayType
