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

class Loader extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function status(array $parameters = []): ?array
    {
        return $this->client->get('loader/status', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function sync(array $parameters = []): ?array
    {
        return $this->client->get('loader/status/sync', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function autoconfigure(array $parameters = []): ?array
    {
        return $this->client->get('loader/autoconfigure', $parameters)->json();
    }
}
