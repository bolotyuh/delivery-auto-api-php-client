<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Fresh\DeliveryAuto\Directory;

use PhpSpec\ObjectBehavior;

/**
 * CurrencySpec
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class CurrencySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fresh\DeliveryAuto\Directory\Currency');
    }
}
