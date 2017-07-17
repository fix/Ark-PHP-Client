# Ark PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/ark-php-client
```

## Usage

``` php
<?php

$client = new BrianFaust\Ark\Client('node123.arknet.cloud', 4001);

dump($client->api('Peers')->version()->json());
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
