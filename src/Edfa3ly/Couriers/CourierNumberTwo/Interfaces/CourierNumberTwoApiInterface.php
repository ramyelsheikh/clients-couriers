<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:02 AM
 */

namespace Edfa3ly\Couriers\CourierNumberTwo\Interfaces;


interface CourierNumberTwoApiInterface
{
    public function createShipmentInfo();

    public function createShipmentInstructions();

    public function getShipmentWaybill();

    public function getShipmentTrackingDetails();

}
