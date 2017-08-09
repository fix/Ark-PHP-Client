# Installation

## Initialize Client

```php
$client = new BrianFaust\Ark\Client('your-node-ip', 4001, 'your-nethash', 'your-version');
```

## Sending Requests

Sending requests is as easy as choosing the API you want to use and what method. After sending a request make sure you check if the response returned a status code of 200 with by using the `isSuccess` or `isOk` methods.

```php
$response = $client->api('Peer')->version();

if ($response->isSuccess()) {
    $body = $response->json();

    if ($response['success']) {
        dd('Everything OK!');
    }
} else {
    dd('Something went wrong...');
}
```

ark-node will always a return 200 status code if validation passed but the response can still contain an error so you should always make sure to double check by confirming that the `success` field of the response body is `true`. If the `success` field equals `false` you should make use of the `error` field that should be available.
