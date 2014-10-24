<?php

namespace spec\Fresh\DeliveryAuto\API\Agencies;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * ListOfAreasMethodSpec
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @author Timur Bolotyuh <timur.bolotyuh@gmail.com>
 */
class ListOfAreasMethodSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(Argument::any());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Fresh\DeliveryAuto\API\Agencies\ListOfAreasMethod');
    }
}


