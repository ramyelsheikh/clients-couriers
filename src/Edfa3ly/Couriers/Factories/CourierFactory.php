<?php
/**
 * Created by PhpStorm.
 * User: Ramy ElSheikh
 * Date: 6/14/18
 * Time: 1:11 AM
 */

namespace Edfa3ly\Couriers\Factories;

use Edfa3ly\Couriers\Adapters\Interfaces\CouriersAdapter;

class CourierFactory
{
    const COURIERS_ADAPTER_NAMESPACE = 'Edfa3ly\Couriers\Adapters';

    public static function build(string $type = ''): CouriersAdapter
    {

        if ($type == '') {
            throw new \InvalidArgumentException('Invalid Courier Name.');
        } else {

            $type = ucfirst($type);

            $className = self::COURIERS_ADAPTER_NAMESPACE . '\CourierNumber' . $type . '\CourierNumber' . $type . 'Adapter';

            if (class_exists($className)) {
                return new $className();
            } else {
                throw new \InvalidArgumentException('Courier ' . $className . ' not found.');
            }
        }
    }

}
