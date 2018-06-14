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


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setCourierApi(new CourierNumberThreeApi());
    }

    /**
     * @return CourierNumberThreeApi
     */
    public function getCourierApi(): CourierNumberThreeApi
    {
        return $this->courierApi;
    }

    /**
     * @param $courierApi
     */
    public function setCourierApi(CourierNumberThreeApi $courierApi): void
    {
        $this->courierApi = $courierApi;
    }

    /*
     * @function createShipment
     */
    public function createShipment()
    {
        $this->getCourierApi()->createShipmentAndGetWayill();
    }

    /*
     * @function trackShipment
     */
    public function trackShipment()
    {
        return $this->getCourierApi()->getTrackingDetails();
    }
}
