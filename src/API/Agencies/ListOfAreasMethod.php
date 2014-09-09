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
use Fresh\DeliveryAuto\Mapping\AreaList\Area;

/**
 * API method to get list of areas (cities)
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ListOfAreasMethod extends AbstractApiMethod
{
    /**
     * {@inheritdoc}
     */
    protected static $partOfUrl = 'Public/GetAreasList';

    /**
     * Constructor
     *
     * @param string $locale Locale
     */
    public function __construct($locale)
    {
        parent::__construct();

        $this->queryParams = [
            'culture' => $locale
        ];
    }

    /**
     * Get object mapped result
     *
     * @return array|Area[]
     */
    public function getObjectMappedResult()
    {
        $result = [];

        foreach ($this->getRawArrayResult() as $item) {
            $area = (new Area())
                ->setId($item['id'])
                ->setName($item['name'])
                ->setWarehouse($item['IsWarehouse'])
                ->setExtraCityPickup($item['ExtracityPickup'])
                ->setExtraCityShipping($item['ExtracityShipping'])
                ->setRegionalAreaPickup($item['RAP'])
                ->setRegionalAreaShipping($item['RAS']);

            array_push($result, $area);
        }

        return $result;
    }
}
