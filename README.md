# Ark PHP Client

## Introduction

All `create*` and `add*` methods should be used at your own risk because they could potentially leak your passphrases. For now it is recommended to set up a small ExpressJS Server that will function as a proxy and provides more security. Take a look at this [issue](https://github.com/faustbrian/Ark-PHP-Client/issues/3) to find out more.

If you have the time and knowledge of how to create signed transaction objects feel free to send a PR so that all `create*` and `add*` methods could be deperecated.

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

// Use try/catch to catch the exception thrown if the response contains "success=false" since ark-node doesn't use proper status codes.
try {
    // Send a request to peers/version
    $response = $client->api('Peer')->version();

    dd($response);
} catch (BrianFaust\Ark\Exceptions\InvalidResponseException $e) {
    dd($e->getMessage());
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
