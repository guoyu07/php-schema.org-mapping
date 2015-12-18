<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\Study;

/**
 * Classes MedicalEntity.
 */
class MedicalEntity
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MedicalEntity';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function code()
    {
        return Code::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function guideline()
    {
        return Guideline::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function medicineSystem()
    {
        return MedicineSystem::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recognizingAuthority()
    {
        return RecognizingAuthority::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relevantSpecialty()
    {
        return RelevantSpecialty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function study()
    {
        return Study::create(self::schemaUrl());
    }
}
