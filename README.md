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
$client = new BrianFaust\Ark\Client([
    'nethash' => 'some_magical_nethash',
    'version' => '1.0.1',
    'activepeer' => [
        'ip' => 'node1.arknet.cloud',
        'port' => 4001,
    ]
]);

// Send a request to peers/version
$response = $client->api('Peer')->version();

// Check if everything went fine
if ($response->isSuccess()) {
    dd($response->json());
} else {
    dd('Something went wrong...');
}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
