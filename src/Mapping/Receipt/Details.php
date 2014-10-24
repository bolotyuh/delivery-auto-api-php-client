<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\DeliveryAuto\Mapping\Receipt;

/**
 * Receipt Details Entity Mapping Class
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @author Timur Bolotyuh <timur.bolotyuh@gmail.com>
 */
class Details
{
    /**
     * @var string $id ID
     */
    private $id;

    /**
     * @var string $number Number
     */
    private $number;

    /**
     * @var string $sendDate Send date
     */
    private $sendDate;

    /**
     * @var string $receiveDate Receive date
     */
    private $receiveDate;

    /**
     * @var string $senderWarehouseName Sender warehouse name
     */
    private $senderWarehouseName;

    /**
     * @var bool $recepientWarehouseName Recepient warehouse name
     */
    private $recepientWarehouseName;

    /**
     * @var float $discount Discount
     */
    private $discount;

    /**
     * @var float $totalCost Total cost
     */
    private $totalCost;

    /**
     * @var int $status Status
     */
    private $status;

    /**
     * @var float $weight Weight
     */
    private $weight;

    /**
     * @var float $volume Volume
     */
    private $volume;

    /**
     * @var string $sites Sites
     */
    private $sites;

    /**
     * @var bool $paymentStatus Payment status
     */
    private $paymentStatus;

    /**
     * @var integer $currency Currency
     */
    private $currency;

    /**
     * @var integer $insuranceCost Insurance cost
     */
    private $insuranceCost;

    /**
     * @var integer $insuranceCurrency Insurance currency
     */
    private $insuranceCurrency;

    /**
     * @var integer $pushStateCode Push state code
     */
    private $pushStateCode;

    /**
     * Get currency
     *
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set currency
     *
     * @param int $currency currency
     *
     * @return Details
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set discount
     *
     * @param float $discount discount
     *
     * @return Details
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param string $id id
     *
     * @return Details
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get insuranceCost
     *
     * @return int
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * Set insuranceCost
     *
     * @param int $insuranceCost insuranceCost
     *
     * @return Details
     */
    public function setInsuranceCost($insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;

        return $this;
    }

    /**
     * Get insuranceCurrency
     *
     * @return int
     */
    public function getInsuranceCurrency()
    {
        return $this->insuranceCurrency;
    }

    /**
     * Set insuranceCurrency
     *
     * @param int $insuranceCurrency insuranceCurrency
     *
     * @return Details
     */
    public function setInsuranceCurrency($insuranceCurrency)
    {
        $this->insuranceCurrency = $insuranceCurrency;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set number
     *
     * @param string $number number
     *
     * @return Details
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return boolean
     */
    public function isPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set paymentStatus
     *
     * @param boolean $paymentStatus paymentStatus
     *
     * @return Details
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get pushStateCode
     *
     * @return int
     */
    public function getPushStateCode()
    {
        return $this->pushStateCode;
    }

    /**
     * Set pushStateCode
     *
     * @param int $pushStateCode pushStateCode
     *
     * @return Details
     */
    public function setPushStateCode($pushStateCode)
    {
        $this->pushStateCode = $pushStateCode;

        return $this;
    }

    /**
     * Get receiveDate
     *
     * @return string
     */
    public function getReceiveDate()
    {
        return $this->receiveDate;
    }

    /**
     * Set receiveDate
     *
     * @param string $receiveDate receiveDate
     *
     * @return Details
     */
    public function setReceiveDate($receiveDate)
    {
        $this->receiveDate = $receiveDate;

        return $this;
    }

    /**
     * Get recepientWarehouseName
     *
     * @return boolean
     */
    public function isRecepientWarehouseName()
    {
        return $this->recepientWarehouseName;
    }

    /**
     * Set recepientWarehouseName
     *
     * @param boolean $recepientWarehouseName recepientWarehouseName
     *
     * @return Details
     */
    public function setRecepientWarehouseName($recepientWarehouseName)
    {
        $this->recepientWarehouseName = $recepientWarehouseName;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return string
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set sendDate
     *
     * @param string $sendDate sendDate
     *
     * @return Details
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get senderWarehouseName
     *
     * @return string
     */
    public function getSenderWarehouseName()
    {
        return $this->senderWarehouseName;
    }

    /**
     * Set senderWarehouseName
     *
     * @param string $senderWarehouseName senderWarehouseName
     *
     * @return Details
     */
    public function setSenderWarehouseName($senderWarehouseName)
    {
        $this->senderWarehouseName = $senderWarehouseName;

        return $this;
    }

    /**
     * Get sites
     *
     * @return string
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Set sites
     *
     * @param string $sites sites
     *
     * @return Details
     */
    public function setSites($sites)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param int $status status
     *
     * @return Details
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get totalCost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * Set totalCost
     *
     * @param float $totalCost totalCost
     *
     * @return Details
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * Get volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set volume
     *
     * @param float $volume volume
     *
     * @return Details
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weight
     *
     * @param float $weight weight
     *
     * @return Details
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

}