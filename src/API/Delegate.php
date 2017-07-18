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

class Delegate extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function count(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/count', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function search(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/search', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getVoters(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/voters', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegate(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/get', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegates(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFee(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/fee', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getForgedByAccount(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/forging/getForgedByAccount', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addDelegate(array $parameters = []): HttpResponse
    {
        return $this->client->put('delegates', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getNextForgers(array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/getNextForgers', $parameters);
    }
}
