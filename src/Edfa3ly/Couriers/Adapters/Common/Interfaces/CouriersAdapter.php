<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:24 AM
 */

namespace Edfa3ly\Couriers\Adapters\Common\Interfaces;


interface CouriersAdapter
{
    public function createShipment();

    public function trackShipment();
}
