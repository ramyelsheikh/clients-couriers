# Client With Couriers API

## Table of Contents

1. [Installation](#installation)
2. [Architecture](#architecture)
  1. [Couriers](#couriers)
  2. [Adapter](#adapter)
  3. [Factory](#factory)
  4. [Client](#client)
  5. [Testing](#testing)
3. [TODO](#todo)


### Installation

To install the Client With Couriers API,
1. Clone the project in your document root.
2. run the composer install command from the root directory of the project (make sure you have [Composer](http://getcomposer.org) installed).
3. Test the project using unit testing (Discussed later).


### Architecture

Here, we needed to use a combination of Factory Method and Adapter pattern.
Factory method will create our native API classes' objects(e.g. CourierNumberOne, CourierNumberTwo etc.)
and adapter will help us creating the object of the requested courier/API

#### Couriers

Each Courier is considered as External API with its different interface and functionalities. 


#### Adapter

The Adapter design pattern that collects the main 2 methods of the courier:

```php
interface CouriersAdapter
{
    public function createShipment();
        
    public function trackShipment();
}
        
```

#### Factory

Responsible for creating the object of the courier according to the given type.


#### Client

Client consumes different Couriers/APIs

You can add more couriers without changing code implementation of the client.
   


#### Testing

Make sure you have phpunit installed. Install it using 

```bash
sudo apt-get install phpunit
```

run the following command from the terminal from your project document root

```bash
./vendor/bin/phpunit
```  


### Todo

1) Adding more Tests for unit testing
