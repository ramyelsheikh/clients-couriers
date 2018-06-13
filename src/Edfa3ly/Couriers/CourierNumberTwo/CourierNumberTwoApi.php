<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:05 AM
 */

namespace Edfa3ly\Couriers\CourierNumberTwo;


use Edfa3ly\Couriers\CourierNumberTwo\Interfaces\CourierNumberTwoApiInterface;

class CourierNumberTwoApi implements CourierNumberTwoApiInterface
{
    public function createShipmentInfo()
    {
        // TODO: Implement createShipmentInfo() method.
    }

    public function createShipmentInstructions()
    {
        // TODO: Implement createShipmentInstructions() method.
    }

    public function getShipmentWaybill()
    {
        // TODO: Implement getShipmentWaybill() method.
    }

    public function getShipmentTrackingDetails()
    {
        return 'CourierNumberTwo Tracking Details';
    }
}
