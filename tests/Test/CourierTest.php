<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 6:08 AM
 */

namespace Edfa3ly\Test;

use Edfa3ly\Client\Client;
use Edfa3ly\Couriers\Adapters\CourierNumberOne\CourierNumberOneAdapter;
use Edfa3ly\Couriers\CourierNumberOne\CourierNumberOneApi;
use PHPUnit\Framework\TestCase;


class CourierTest extends TestCase
{
    public function test()
    {
        $courier1 = new Client(new CourierNumberOneAdapter(new CourierNumberOneApi()));
        $courier1->createShipment();
        $shipmentTracking = $courier1->trackShipment();
        $output = "CourierNumberOne Tracking Details";
        $this->assertEquals($shipmentTracking, $output);
    }
}
