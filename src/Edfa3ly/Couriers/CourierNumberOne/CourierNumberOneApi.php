<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 2:33 AM
 */

namespace Edfa3ly\Couriers\CourierNumberOne;


use Edfa3ly\Couriers\CourierNumberOne\Interfaces\CourierNumberOneApiInterface;

class CourierNumberOneApi implements CourierNumberOneApiInterface
{

    public function createShipmentAndGetWaybill()
    {
        // TODO: Implement createShipmentAndGetWaybill() method.
    }

    public function getShipmentTrackingDetails()
    {
        return 'CourierNumberOne Tracking Details';
    }
}
