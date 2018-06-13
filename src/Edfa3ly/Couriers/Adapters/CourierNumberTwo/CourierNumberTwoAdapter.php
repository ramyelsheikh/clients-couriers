<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:37 AM
 */

namespace Edfa3ly\Couriers\Adapters\CourierNumberTwo;


use Edfa3ly\Couriers\Adapters\Common\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\CourierNumberTwo\CourierNumberTwoApi;

class CourierNumberTwoAdapter implements CouriersAdapter
{
    private $courierNumberTwoApi;

    public function __construct(CourierNumberTwoApi $courierNumberTwoApi)
    {
        $this->courierNumberTwoApi = $courierNumberTwoApi;
    }

    public function createShipment()
    {
        $this->courierNumberTwoApi->createShipmentInstructions();

        $this->courierNumberTwoApi->createShipmentInfo();
    }

    public function trackShipment()
    {
        return $this->courierNumberTwoApi->getShipmentTrackingDetails();
    }

}
