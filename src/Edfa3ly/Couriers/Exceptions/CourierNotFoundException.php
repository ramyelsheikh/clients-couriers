<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 6/14/18
 * Time: 4:36 AM
 */

namespace Edfa3ly\Couriers\Exceptions;


use Throwable;

class CourierNotFoundException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('Courier Not Found.', $code, $previous);
    }

}
