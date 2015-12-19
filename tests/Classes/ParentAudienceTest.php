<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ParentAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ParentAudienceTest.
 */
class ParentAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ParentAudience::schemaUrl(), 'http://schema.org/ParentAudience');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::alternateName());
    }

    public function testAudienceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::audienceType());
    }

    public function testChildMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::childMaxAge());
    }

    public function testChildMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::childMinAge());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::description());
    }

    public function testGeographicAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::geographicArea());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParentAudience::url());
    }
}