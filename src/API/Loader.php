<?php

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Ark\API;

use BrianFaust\Http\HttpResponse;

class Loader extends AbstractAPI
{
    /**
     * Get the blockchain status.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function status(array $parameters = []): HttpResponse
    {
        return $this->client->get('loader/status', $parameters);
    }

    /**
     * Get the synchronisation status of the client.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function sync(array $parameters = []): HttpResponse
    {
        return $this->client->get('loader/status/sync', $parameters);
    }

    /**
     * Auto-configure the client loader.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function autoconfigure(array $parameters = []): HttpResponse
    {
        return $this->client->get('loader/autoconfigure', $parameters);
    }
}
