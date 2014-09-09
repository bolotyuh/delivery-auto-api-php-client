<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\DeliveryAuto\API\Receipts;

use Fresh\DeliveryAuto\API\AbstractApiMethod;
use Fresh\DeliveryAuto\Mapping\Receipt\Details;

/**
 * API method to get receipt details
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ReceiptDetailsMethod extends AbstractApiMethod
{
    /**
     * {@inheritdoc}
     */
    protected static $partOfUrl = 'Public/GetReceiptDetails';

    /**
     * Constructor
     *
     * @param string $locale Locale
     * @param string $number Receipt number
     */
    public function __construct($locale, $number)
    {
        parent::__construct();

        $this->queryParams = [
            'culture' => $locale,
            'number'  => $number
        ];
    }

    /**
     * Get object mapped result
     *
     * @return array|Details[]
     */
    public function getObjectMappedResult()
    {
        $item = $this->getRawArrayResult();

        return (new Details())
            ->setId($item['id']);
//            ->setName($item['name'])
//            ->setAddress($item['address'])
//            ->setOperatingTime($item['operatingTime'])
//            ->setPhone($item['Phone'])
//            ->setEmailStorage($item['EmailStorage'])
//            ->setLatitude($item['latitude'])
//            ->setLongitude($item['longitude'])
//            ->setOffice($item['Office']);
    }
}
