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
 * @method static \NilPortugues\SchemaOrg\Properties\LandlordProperty landlord()
 * @method static \NilPortugues\SchemaOrg\Properties\RealEstateAgentProperty realEstateAgent()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceProperty price()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty priceSpecification()
 * @method static \NilPortugues\SchemaOrg\Properties\AgentProperty agent()
 * @method static \NilPortugues\SchemaOrg\Properties\EndTimeProperty endTime()
 * @method static \NilPortugues\SchemaOrg\Properties\InstrumentProperty instrument()
 * @method static \NilPortugues\SchemaOrg\Properties\LocationProperty location()
 * @method static \NilPortugues\SchemaOrg\Properties\ObjectTypeProperty objectType()
 * @method static \NilPortugues\SchemaOrg\Properties\ParticipantProperty participant()
 * @method static \NilPortugues\SchemaOrg\Properties\ResultProperty result()
 * @method static \NilPortugues\SchemaOrg\Properties\StartTimeProperty startTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ActionStatusProperty actionStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ErrorProperty error()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetProperty target()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.
 */
class RentAction extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/RentAction';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actionStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'agent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'endTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'error' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ErrorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'instrument' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InstrumentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'landlord' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LandlordProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\RentAction',
        ],
        'location' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'objectType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ObjectTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'participant' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParticipantProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'price' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TradeAction',
        ],
        'priceSpecification' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TradeAction',
        ],
        'realEstateAgent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RealEstateAgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\RentAction',
        ],
        'result' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ResultProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'startTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'target' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
