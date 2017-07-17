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

class Delegate extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function count(array $parameters = []): ?array
    {
        return $this->client->get('delegates/count', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function search(array $parameters = []): ?array
    {
        return $this->client->get('delegates/search', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getVoters(array $parameters = []): ?array
    {
        return $this->client->get('delegates/voters', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getDelegate(array $parameters = []): ?array
    {
        return $this->client->get('delegates/get', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getDelegates(array $parameters = []): ?array
    {
        return $this->client->get('delegates', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getFee(array $parameters = []): ?array
    {
        return $this->client->get('delegates/fee', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getForgedByAccount(array $parameters = []): ?array
    {
        return $this->client->get('delegates/forging/getForgedByAccount', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function addDelegate(array $parameters = []): ?array
    {
        return $this->client->put('delegates', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getNextForgers(array $parameters = []): ?array
    {
        return $this->client->get('delegates/getNextForgers', $parameters)->json();
    }
}
