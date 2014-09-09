<?php
/*
 * This file is part of the "Delivery Auto" API PHP Client
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Fresh\DeliveryAuto;

use PhpSpec\ObjectBehavior;

/**
 * "Delivery Auto" API PHP Client Spec
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fresh\DeliveryAuto\Client');
    }
}
