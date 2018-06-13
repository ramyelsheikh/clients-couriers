<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:26 AM
 */

namespace Edfa3ly\Couriers\Adapters\CourierNumberThree;


use Edfa3ly\Couriers\Adapters\Common\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\CourierNumberThree\CourierNumberThreeApi;

class CourierNumberThreeAdapter implements CouriersAdapter
{
    private $courierNumberThreeApi;

    public function __construct(CourierNumberThreeApi $courierNumberThreeApi)
    {
        $this->courierNumberThreeApi = $courierNumberThreeApi;
    }

    public function createShipment()
    {
        $this->courierNumberThreeApi->createShipmentAndGetWayill();
    }

    public function trackShipment()
    {
        return $this->courierNumberThreeApi->getTrackingDetails();
    }
}
