<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 2:18 AM
 */

namespace Edfa3ly\Couriers\CourierNumberOne\Interfaces;


interface CourierNumberOneApiInterface
{

    public function createShipmentAndGetWaybill();

    public function getShipmentTrackingDetails();
}
