<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:00 AM
 */

namespace Edfa3ly\Couriers\CourierNumberThree;


use Edfa3ly\Couriers\CourierNumberThree\Interfaces\CourierNumberThreeApiInterface;

class CourierNumberThreeApi implements CourierNumberThreeApiInterface
{
    public function createShipmentAndGetWayill()
    {
        // TODO: Implement createShipmentAndGetWayill() method.
    }

    public function registerNumberToGetTrackingDetails()
    {
        // TODO: Implement registerNumberToGetTrackingDetails() method.
    }

    public function getTrackingDetails()
    {
        return 'CourierNumberThree Tracking Details';
    }

}
