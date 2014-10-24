<?php

namespace spec\Fresh\DeliveryAuto;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * ClientSpec
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @author Timur Bolotyuh <timur.bolotyuh@gmail.com>
 */
class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fresh\DeliveryAuto\Client');
    }

    public function it_returns_list_of_regions()
    {
        $this->getListOfRegions()->shouldReturnAnInstanceOf('Fresh\DeliveryAuto\API\Agencies\ListOfRegionsMethod');
    }

    public function it_returns_list_of_areas()
    {
        $this->getListOfAreas()->shouldReturnAnInstanceOf('Fresh\DeliveryAuto\API\Agencies\ListOfAreasMethod');
    }

    public function it_returns_list_of_warehouses()
    {
        $this->getListOfWarehouses()->shouldReturnAnInstanceOf(
            'Fresh\DeliveryAuto\API\Agencies\ListOfWarehousesMethod'
        );
    }

    public function it_returns_warehouses_info()
    {
        $this->getWarehouseInfo(Argument::any())->shouldReturnAnInstanceOf(
            'Fresh\DeliveryAuto\API\Agencies\WarehouseInfoMethod'
        );
    }

    public function it_returns_find_warehouses()
    {
        $this->findWarehouses(
            Argument::any(),
            Argument::any(),
            Argument::any(),
            Argument::any()
        )->shouldReturnAnInstanceOf(
            'Fresh\DeliveryAuto\API\Agencies\FindWarehousesMethod'
        );
    }

    public function it_returns_receipt_details()
    {
        $this->getReceiptDetails(Argument::any())
            ->shouldReturnAnInstanceOf('Fresh\DeliveryAuto\API\Receipts\ReceiptDetailsMethod');
    }

    public function it_returns_list_of_additional_services()
    {
        $this->getListOfAdditionalServices()->shouldReturnAnInstanceOf('Fresh\DeliveryAuto\API\Cost\ListOfAdditionalServicesMethod');
    }

}


