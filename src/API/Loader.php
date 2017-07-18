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
     * @return \BrianFaust\Http\HttpResponse
     */
    public function status(): HttpResponse
    {
        return $this->client->get('loader/status');
    }

    /**
     * Get the synchronisation status of the client.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function sync(): HttpResponse
    {
        return $this->client->get('loader/status/sync');
    }

    /**
     * Auto-configure the client loader.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function autoconfigure(): HttpResponse
    {
        return $this->client->get('loader/autoconfigure');
    }
}
