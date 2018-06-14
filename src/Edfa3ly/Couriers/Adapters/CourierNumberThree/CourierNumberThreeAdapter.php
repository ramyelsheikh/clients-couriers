<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:26 AM
 */

namespace Edfa3ly\Couriers\Adapters\CourierNumberThree;


use Edfa3ly\Couriers\Adapters\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\CourierNumberThree\CourierNumberThreeApi;

class CourierNumberThreeAdapter implements CouriersAdapter
{
    /**
     * @var CourierNumberThreeApi
     */
    private $courierApi;


    public function __construct()
    {
        $this->setCourierApi(new CourierNumberThreeApi());
    }

    public function getCourierApi(): CourierNumberThreeApi
    {
        return $this->courierApi;
    }

    public function setCourierApi(CourierNumberThreeApi $courierApi)
    {
        $this->courierApi = $courierApi;
    }

    public function createShipment()
    {
        $this->getCourierApi()->createShipmentAndGetWayill();
    }

    public function trackShipment()
    {
        return $this->getCourierApi()->getTrackingDetails();
    }
}
