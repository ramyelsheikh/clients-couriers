<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:25 AM
 */

namespace Edfa3ly\Couriers\Adapters\CourierNumberOne;


use Edfa3ly\Couriers\Adapters\Common\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\CourierNumberOne\CourierNumberOneApi;

class CourierNumberOneAdapter implements CouriersAdapter
{
    private $courierNumberOneApi;

    public function __construct(CourierNumberOneApi $courierNumberOneApi)
    {
        $this->courierNumberOneApi = $courierNumberOneApi;
    }

    public function createShipment()
    {
        $this->courierNumberOneApi->createShipmentAndGetWaybill();
    }

    public function trackShipment()
    {
        return $this->courierNumberOneApi->getShipmentTrackingDetails();
    }

}
