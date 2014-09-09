<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\DeliveryAuto\API\Agencies;

use Fresh\DeliveryAuto\API\AbstractApiMethod;
use Fresh\DeliveryAuto\Mapping\WarehouseInfo\Warehouse;

/**
 * API method to get information about warehouse
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class WarehouseInfoMethod extends AbstractApiMethod
{
    /**
     * {@inheritdoc}
     */
    protected static $partOfUrl = 'Public/GetWarehousesInfo';

    /**
     * Constructor
     *
     * @param string $locale      Locale
     * @param string $warehouseId Warehouse ID
     */
    public function __construct($locale, $warehouseId)
    {
        parent::__construct();

        $this->queryParams = [
            'culture'      => $locale,
            'WarehousesId' => $warehouseId
        ];
    }

    /**
     * Get object mapped result
     *
     * @return array|Warehouse[]
     */
    public function getObjectMappedResult()
    {
        $item = $this->getRawArrayResult();

        return (new Warehouse())
            ->setId($item['id'])
            ->setName($item['name'])
            ->setAddress($item['address'])
            ->setOperatingTime($item['operatingTime'])
            ->setPhone($item['Phone'])
            ->setEmailStorage($item['EmailStorage'])
            ->setLatitude($item['latitude'])
            ->setLongitude($item['longitude'])
            ->setOffice($item['Office']);
    }
}
