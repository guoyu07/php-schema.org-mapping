<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActiveIngredient;
use NilPortugues\SchemaOrg\Properties\AvailableIn;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\StrengthUnit;
use NilPortugues\SchemaOrg\Properties\StrengthValue;
use NilPortugues\SchemaOrg\Properties\Study;

/**
 * Classes DrugStrength
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A specific strength in which a medical drug is available in a specific country.
 */
class DrugStrength
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/DrugStrength";

   /**
    * Returns the URL of the current definition at http://schema.org
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
    public static function activeIngredient()
    {
        return ActiveIngredient::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availableIn()
    {
        return AvailableIn::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function code()
    {
        return Code::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function guideline()
    {
        return Guideline::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function medicineSystem()
    {
        return MedicineSystem::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recognizingAuthority()
    {
        return RecognizingAuthority::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function relevantSpecialty()
    {
        return RelevantSpecialty::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function strengthUnit()
    {
        return StrengthUnit::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function strengthValue()
    {
        return StrengthValue::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function study()
    {
        return Study::create(MedicalEntity::schemaUrl());
    }
}