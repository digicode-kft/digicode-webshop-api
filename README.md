# digicode-webshop-api
PHP based REST client for Digicode Webshop API, which makes our partners happy. 

## Usage

First of all you must create an account on our [website](https://www.digicode.hu) and then you must login and create an API key in the partner area. After that please check the available methods in our sdk.

> If you having any question please feel free to contact with us.

```php
require 'sdk/Price.php';

$price = new Price(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$price_get = $price->get(array("partnumber" => "LS2208-SR20007R-UR"));
print_r($price_get);

$price_list = $price->list();
print_r($price_list);
```

