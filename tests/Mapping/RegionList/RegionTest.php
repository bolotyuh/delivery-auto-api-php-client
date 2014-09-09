<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\DeliveryAuto\Mapping\WarehouseList;

use Fresh\DeliveryAuto\Mapping\RegionList\Region;

/**
 * Region Entity Mapping Class
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class RegionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test empty Region entity
     *
     * @test
     * @covers ::__construct
     * @covers ::getId
     * @covers ::getName
     */
    public function emptyWarehouse()
    {
        $region = new Region();
        $this->assertNull($region->getId());
        $this->assertNull($region->getName());
    }

    /**
     * Test setter and getter for ID
     *
     * @test
     * @covers ::setId
     * @covers ::getId
     */
    public function setGetId()
    {
        $id = 123;
        $region = (new Region())->setId($id);
        $this->assertEquals($id, $region->getId());
    }

    /**
     * Test setter and getter for name
     *
     * @test
     * @covers ::setName
     * @covers ::getName
     */
    public function setGetName()
    {
        $name = 'test';
        $region = (new Region())->setName($name);
        $this->assertEquals($name, $region->getName());
    }
}
