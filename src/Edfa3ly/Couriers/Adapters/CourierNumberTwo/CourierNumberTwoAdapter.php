<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:37 AM
 */

namespace Edfa3ly\Couriers\Adapters\CourierNumberTwo;


use Edfa3ly\Couriers\Adapters\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\CourierNumberTwo\CourierNumberTwoApi;

class CourierNumberTwoAdapter implements CouriersAdapter
{
    /**
     * @var CourierNumberTwoApi
     */
    private $courierApi;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setCourierApi(new CourierNumberTwoApi());
    }

    /**
     * @return CourierNumberTwoApi
     */
    public function getCourierApi(): CourierNumberTwoApi
    {
        return $this->courierApi;
    }

    /**
     * @param $courierApi
     */
    public function setCourierApi(CourierNumberTwoApi $courierApi)
    {
        $this->courierApi = $courierApi;
    }

    /*
     * @function createShipment
     */
    public function createShipment()
    {
        $this->getCourierApi()->createShipmentInstructions();

        $this->getCourierApi()->createShipmentInfo();
    }

    /*
     * @function trackShipment
     */
    public function trackShipment()
    {
        return $this->getCourierApi()->getShipmentTrackingDetails();
    }

}
