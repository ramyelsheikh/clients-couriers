<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 3:35 AM
 */

namespace Edfa3ly\Couriers\CourierNumberThree\Interfaces;


interface CourierNumberThreeApiInterface
{
    public function createShipmentAndGetWayill();

    public function registerNumberToGetTrackingDetails();

    public function getTrackingDetails();

}
