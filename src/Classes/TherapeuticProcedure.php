<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\FollowupProperty followup()
 * @method static \NilPortugues\SchemaOrg\Properties\HowPerformedProperty howPerformed()
 * @method static \NilPortugues\SchemaOrg\Properties\PreparationProperty preparation()
 * @method static \NilPortugues\SchemaOrg\Properties\ProcedureTypeProperty procedureType()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * @method static \NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty adverseOutcome()
 * @method static \NilPortugues\SchemaOrg\Properties\ContraindicationProperty contraindication()
 * @method static \NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty duplicateTherapy()
 * @method static \NilPortugues\SchemaOrg\Properties\IndicationProperty indication()
 * @method static \NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty seriousAdverseOutcome()
 * METHODEND.
 *
 * A medical procedure intended primarily for therapeutic purposes, aimed at improving a health condition.
 */
class TherapeuticProcedure extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TherapeuticProcedure';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'adverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'contraindication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContraindicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'duplicateTherapy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'followup' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FollowupProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'howPerformed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HowPerformedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'indication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IndicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'preparation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PreparationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'procedureType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProcedureTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seriousAdverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
