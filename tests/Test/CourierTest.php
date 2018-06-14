<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 6:08 AM
 */

namespace Edfa3ly\Test;

use Edfa3ly\Couriers\Factories\CourierFactory;
use PHPUnit\Framework\TestCase;


class CourierTest extends TestCase
{
    public function test()
    {
        $courier = CourierFactory::build('Two');
        $courier->createShipment();
        $shipmentTracking = $courier->trackShipment();
        $output = "CourierNumberTwo Tracking Details";
        $this->assertEquals($shipmentTracking, $output);
    }
}
