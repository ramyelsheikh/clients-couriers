<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/14/18
 * Time: 1:11 AM
 */

namespace Edfa3ly\Couriers\Factories;

use Edfa3ly\Couriers\Adapters\Interfaces\CouriersAdapter;
use Edfa3ly\Couriers\Exceptions\CourierNotFoundException;

class CourierFactory
{
    const COURIERS_ADAPTER_NAMESPACE = 'Edfa3ly\Couriers\Adapters';

    /**
     * @param string $type
     * @return CouriersAdapter
     */
    public static function build(string $type = ''): CouriersAdapter
    {

        try {
            $type = ucfirst($type);

            //call the className with namespace
            $className = self::COURIERS_ADAPTER_NAMESPACE . '\CourierNumber' . $type . '\CourierNumber' . $type . 'Adapter';

            if (class_exists($className)) {
                return new $className();
            }
        }
        catch (CourierNotFoundException $e) {
            echo $e->getMessage();
        }
    }

}
