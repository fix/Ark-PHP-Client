# Ark PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/ark-php-client
```

## Usage

``` php
<?php

// Setup a new ark client
$client = new BrianFaust\Ark\Client('node1.arknet.cloud', 4001, 'some_magical_nethash', '1.0.1');

// Send a request to peers/version
$response = $client->api('Peer')->version();

// Check if everything went fine
if ($response->isSuccess()) {
    dd($response->json());
} else {
    dd('Something went wrong...');
}
```

### Calculator

```php
$calculator = new BrianFaust\Ark\Utils\Calculator(422, 75);
$calculator->setVotingPool(1000000);

dump($calculator->perSecond(10000));
dump($calculator->perMinute(10000));
dump($calculator->perHour(10000));
dump($calculator->perDay(10000));
dump($calculator->perWeek(10000));
dump($calculator->perMonth(10000));
dump($calculator->perYear(10000));
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
