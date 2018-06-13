<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 5:37 AM
 */

namespace Edfa3ly\Client\Interfaces;


interface ClientInterface
{
    public function createShipment();

    public function trackShipment();
}
