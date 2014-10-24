<?php

namespace spec\Fresh\DeliveryAuto\Directory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * LocaleSpec
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @author Timur Bolotyuh <timur.bolotyuh@gmail.com>
 */
class LocaleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fresh\DeliveryAuto\Directory\Locale');
    }

}


