<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\DeliveryAuto\API\Cost;

use Fresh\DeliveryAuto\API\AbstractApiMethod;
use Fresh\DeliveryAuto\Mapping\AdditionalServiceList\Classification;
use Fresh\DeliveryAuto\Mapping\AdditionalServiceList\Service;

/**
 * API method to get list of additional services
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ListOfAdditionalServicesMethod extends AbstractApiMethod
{
    /**
     * {@inheritdoc}
     */
    protected static $partOfUrl = 'Public/GetDopUslugiClassification';

    /**
     * Constructor
     *
     * @param string $locale   Locale
     * @param int    $currency Currency
     */
    public function __construct($locale, $currency)
    {
        parent::__construct();

        $this->queryParams = [
            'currency' => $currency,
            'culture'  => $locale
        ];
    }

    /**
     * Get object mapped result
     *
     * @return array|Classification[]
     */
    public function getObjectMappedResult()
    {
        $result = [];

        foreach ($this->getRawArrayResult() as $item) {
            $additionalServices = [];
            foreach ($item['dopUsluga'] as $service) {
                $additionalService = (new Service())
                    ->setId($service['uslugaId'])
                    ->setName($service['name'])
                    ->setCost($service['cost'])
                    ->setCount($service['count'])
                    ->setClassification($service['classification'])
                    ->setMinWidth($service['minWidth'])
                    ->setMaxWidth($service['maxWidth'])
                    ->setSum($service['summa'])
                    ->setComment($service['comment'])
                    ->setCurrencyCode($service['currency']);

                array_push($additionalServices, $additionalService);
            }

            $classification = (new Classification())
                ->setClassificationCode($item['classification'])
                ->setName($item['name'])
                ->setAdditionalServices($additionalServices);

            array_push($result, $classification);
        }

        return $result;
    }
}
