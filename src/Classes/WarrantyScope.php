<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes WarrantyScope.
 */
class WarrantyScope
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/WarrantyScope';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }
}
