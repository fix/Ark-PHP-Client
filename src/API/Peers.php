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

class Peers extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getPeers(array $parameters = []): ?array
    {
        return $this->client->get('peers', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function version(array $parameters = []): ?array
    {
        return $this->client->get('peers/version', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getPeer(array $parameters = []): ?array
    {
        return $this->client->get('peers/get', $parameters)->json();
    }
}
