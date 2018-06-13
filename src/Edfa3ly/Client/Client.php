<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/13/18
 * Time: 4:58 AM
 */

namespace Edfa3ly\Client;


use Edfa3ly\Client\Interfaces\ClientInterface;
use Edfa3ly\Couriers\Adapters\Common\Interfaces\CouriersAdapter;

class Client implements ClientInterface
{
    protected $courier;

    public function __construct(CouriersAdapter $courier)
    {
        $this->courier = $courier;
    }

    public function createShipment()
    {
        $this->courier->createShipment();
    }

    public function trackShipment()
    {
        return $this->courier->trackShipment();
    }

}
