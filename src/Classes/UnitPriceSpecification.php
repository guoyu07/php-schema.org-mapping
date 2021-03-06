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
 * @method static \NilPortugues\SchemaOrg\Properties\BillingIncrementProperty billingIncrement()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceTypeProperty priceType()
 * @method static \NilPortugues\SchemaOrg\Properties\UnitCodeProperty unitCode()
 * @method static \NilPortugues\SchemaOrg\Properties\UnitTextProperty unitText()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty eligibleQuantity()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty eligibleTransactionVolume()
 * @method static \NilPortugues\SchemaOrg\Properties\MaxPriceProperty maxPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\MinPriceProperty minPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceProperty price()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidFromProperty validFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidThroughProperty validThrough()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueAddedTaxIncludedProperty valueAddedTaxIncluded()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty priceCurrency()
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
 * The price asked for a given offer by the respective organization or person.
 */
class UnitPriceSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/UnitPriceSpecification';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'billingIncrement' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BillingIncrementProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\UnitPriceSpecification',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'eligibleQuantity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'eligibleTransactionVolume' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'maxPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaxPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'minPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'price' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'priceCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'priceType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\UnitPriceSpecification',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'unitCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\UnitPriceSpecification',
        ],
        'unitText' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitTextProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\UnitPriceSpecification',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'validFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'validThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'valueAddedTaxIncluded' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueAddedTaxIncludedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
    ];
}
