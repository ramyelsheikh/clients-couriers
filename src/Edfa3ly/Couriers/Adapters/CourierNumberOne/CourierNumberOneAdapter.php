<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:25 AM
 */

namespace Edfa3ly\Couriers\Adapters\CourierNumberOne;


use Edfa3ly\Couriers\Adapters\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\CourierNumberOne\CourierNumberOneApi;

class CourierNumberOneAdapter implements CouriersAdapter
{
    /**
     * @var CourierNumberOneApi
     */
    private $courierApi;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setCourierApi(new CourierNumberOneApi());
    }

    /**
     * @return CourierNumberOneApi
     */
    public function getCourierApi(): CourierNumberOneApi
    {
        return $this->courierApi;
    }

    /**
     * @param $courierApi
     */
    public function setCourierApi(CourierNumberOneApi $courierApi): void
    {
        $this->courierApi = $courierApi;
    }

    /*
     * @function createShipment
     */
    public function createShipment()
    {
        $this->getCourierApi()->createShipmentAndGetWaybill();
    }

    /*
     * @function trackShipment
     */
    public function trackShipment()
    {
        return $this->getCourierApi()->getShipmentTrackingDetails();
    }

}
