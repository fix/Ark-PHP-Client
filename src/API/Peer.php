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

class Peer extends AbstractAPI
{
    /**
     * Get all peers.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPeers(array $parameters = []): HttpResponse
    {
        return $this->client->get('peers', $parameters);
    }

    /**
     * Get the peer version.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function version(array $parameters = []): HttpResponse
    {
        return $this->client->get('peers/version', $parameters);
    }

    /**
     * Get a single peer.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPeer(array $parameters = []): HttpResponse
    {
        return $this->client->get('peers/get', $parameters);
    }
}
