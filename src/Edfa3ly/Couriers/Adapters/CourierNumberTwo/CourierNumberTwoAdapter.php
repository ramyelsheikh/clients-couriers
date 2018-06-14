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


    public function __construct()
    {
        $this->setCourierApi(new CourierNumberTwoApi());
    }

    public function getCourierApi(): CourierNumberTwoApi
    {
        return $this->courierApi;
    }

    public function setCourierApi(CourierNumberTwoApi $courierApi)
    {
        $this->courierApi = $courierApi;
    }

    public function createShipment()
    {
        $this->getCourierApi()->createShipmentInstructions();

        $this->getCourierApi()->createShipmentInfo();
    }

    public function trackShipment()
    {
        return $this->getCourierApi()->getShipmentTrackingDetails();
    }

}
