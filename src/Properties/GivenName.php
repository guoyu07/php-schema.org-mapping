<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\MappedProperty;
use NilPortugues\SchemaOrg\Mapping;

class GivenName
{
    const SCHEMA_URL = 'http://schema.org/givenName';
    const PROPERTY_NAME = 'givenName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    private static $allowedSchemas = [
        'http://schema.org/Person',
    ];

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
     *
     * @param string $class
     *
     * @return Mapping
     */
    public static function create($class)
    {
        self::guardAllowedSchemaClasses($class);

        return MappedProperty::create($class, self::PROPERTY_NAME, self::SCHEMA_URL);
    }

    /**
     * @param string $class
     *
     * @throws InvalidSchemaPropertyException
     */
    private static function guardAllowedSchemaClasses($class)
    {
        if (false === empty(self::$allowedSchemas) && false === in_array($class, self::$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(self::PROPERTY_NAME, $class);
        }
    }
}
