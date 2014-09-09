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
use Fresh\DeliveryAuto\Mapping\FindWarehouses\Warehouse;

/**
 * API method to find warehouses
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class FindWarehousesMethod extends AbstractApiMethod
{
    /**
     * {@inheritdoc}
     */
    protected static $partOfUrl = 'Public/GetFindWarehouses';

    /**
     * Constructor
     *
     * @param string $locale            Locale
     * @param bool   $includeRegCenters Include regional centers
     * @param float  $longitude         Longitude
     * @param float  $latitude          Latitude
     * @param int    $count             Count
     */
    public function __construct($locale, $includeRegCenters, $longitude, $latitude, $count)
    {
        parent::__construct();

        $this->queryParams = [
            'includeRegionalCenters' => $includeRegCenters,
            'Longitude'              => $longitude,
            'Latitude'               => $latitude,
            'count'                  => $count,
            'culture'                => $locale
        ];
    }

    /**
     * Get object mapped result
     *
     * @return array|Warehouse[]
     */
    public function getObjectMappedResult()
    {
        $result = [];

        foreach ($this->getRawArrayResult() as $item) {
            $warehouse = (new Warehouse())
                ->setId($item['id'])
                ->setName($item['name'])
                ->setCityName($item['cityName'])
                ->setAddress($item['address'])
                ->setWarehouse($item['IsWarehouse'])
                ->setDistance($item['distance'])
                ->setLatitude($item['latitude'])
                ->setLongitude($item['longitude']);

            array_push($result, $warehouse);
        }

        return $result;
    }
}
