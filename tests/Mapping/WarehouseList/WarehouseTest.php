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

use Fresh\DeliveryAuto\Mapping\WarehouseList\Warehouse;

/**
 * Warehouse Entity Mapping Class
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class WarehouseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test empty Warehouse entity
     *
     * @test
     * @covers ::__construct
     * @covers ::getId
     * @covers ::getLatitude
     * @covers ::getLongitude
     * @covers ::getName
     */
    public function emptyWarehouse()
    {
        $warehouse = new Warehouse();
        $this->assertNull($warehouse->getId());
        $this->assertNull($warehouse->getLatitude());
        $this->assertNull($warehouse->getLongitude());
        $this->assertNull($warehouse->getName());
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
        $warehouse = (new Warehouse())->setId($id);
        $this->assertEquals($id, $warehouse->getId());
    }

    /**
     * Test setter and getter for latitude
     *
     * @test
     * @covers ::setLatitude
     * @covers ::getLatitude
     */
    public function setGetLatitude()
    {
        $latitude = 123456.78;
        $warehouse = (new Warehouse())->setLatitude($latitude);
        $this->assertEquals($latitude, $warehouse->getLatitude());
    }

    /**
     * Test setter and getter for longitude
     *
     * @test
     * @covers ::setLongitude
     * @covers ::getLongitude
     */
    public function setGetLongitude()
    {
        $longitude = 123456.78;
        $warehouse = (new Warehouse())->setLongitude($longitude);
        $this->assertEquals($longitude, $warehouse->getLongitude());
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
        $warehouse = (new Warehouse())->setName($name);
        $this->assertEquals($name, $warehouse->getName());
    }
}
