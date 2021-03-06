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
 * The TV series to which this episode or season belongs.
 */
class PartOfTVSeriesProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/partOfTVSeries';
    const PROPERTY_NAME = 'partOfTVSeries';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TVEpisode',
        'http://schema.org/TVSeason',
        'http://schema.org/TVClip',
    ];
}
