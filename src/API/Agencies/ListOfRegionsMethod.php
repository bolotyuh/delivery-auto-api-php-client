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
use Fresh\DeliveryAuto\Mapping\RegionList\Region;

/**
 * API method to get list of regions
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ListOfRegionsMethod extends AbstractApiMethod
{
    /**
     * {@inheritdoc}
     */
    protected static $partOfUrl = 'Public/GetRegionList';

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
     * @return array|Region[]
     */
    public function getObjectMappedResult()
    {
        $result = [];

        foreach ($this->getRawArrayResult() as $item) {
            $region = (new Region())
                ->setId($item['id'])
                ->setName($item['name']);

            array_push($result, $region);
        }

        return $result;
    }
}
