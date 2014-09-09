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
 */
class Details
{
    /**
     * @var string $id ID
     */
    private $id;

    /**
     * @var string $name Name
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
     * @var bool $paymentStatus Payment status
     */
    private $paymentStatus;

    /**
     * @var int $currencyCode Currency code
     */
    private $currencyCode;
}
