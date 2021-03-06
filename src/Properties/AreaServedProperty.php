<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * The geographic area where a service or offered item is provided.
 */
class AreaServedProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/areaServed';
    const PROPERTY_NAME = 'areaServed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
        'http://schema.org/Organization',
        'http://schema.org/ContactPoint',
        'http://schema.org/Demand',
        'http://schema.org/Offer',
        'http://schema.org/DeliveryChargeSpecification',
    ];
}
