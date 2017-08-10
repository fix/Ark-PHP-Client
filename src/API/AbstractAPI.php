<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Ark\API;

use Illuminate\Support\Arr;
use BrianFaust\Http\HttpResponse;
use Illuminate\Support\Collection;
use BrianFaust\Http\PendingHttpRequest;
use BrianFaust\Ark\Exceptions\InvalidResponseException;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    private $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    /**
     * Create and send an Http "GET" request.
     */
    protected function get(string $url, array $params = []): Collection
    {
        return $this->handle($this->client->get($url, $params));
    }

    /**
     * Create and send an Http "POST" request.
     */
    protected function post(string $url, array $params = []): Collection
    {
        return $this->handle($this->client->post($url, $params));
    }

    /**
     * Create and send an Http "PUT" request.
     */
    protected function put(string $url, array $params = []): Collection
    {
        return $this->handle($this->client->put($url, $params));
    }

    /**
     * Create and send an Http "PATCH" request.
     */
    protected function patch(string $url, array $params = []): Collection
    {
        return $this->handle($this->client->patch($url, $params));
    }

    /**
     * Create and send an Http "DELETE" request.
     */
    protected function delete(string $url, array $params = []): Collection
    {
        return $this->handle($this->client->delete($url, $params));
    }

    /**
     * Handle the response format ark-node uses.
     */
    private function handle(HttpResponse $response): Collection
    {
        $body = $response->json();

        if (! $body['success']) {
            throw new InvalidResponseException($body['error']);
        }

        return (new Collection($body))->except('success'); // Arr::except($body, 'success');
    }
}
