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
     * @return \BrianFaust\Http\HttpResponse
     */
    public function count(): HttpResponse
    {
        return $this->client->get('delegates/count');
    }

    /**
     * @param string $q
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function search(string $q, array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/search', compact('q') + $parameters);
    }

    /**
     * @param string $publicKey
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getVoters(string $publicKey, array $parameters = []): HttpResponse
    {
        return $this->client->get('delegates/voters', compact('publicKey') + $parameters);
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
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFee(): HttpResponse
    {
        return $this->client->get('delegates/fee');
    }

    /**
     * @param string $generatorPublicKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getForgedByAccount(string $generatorPublicKey): HttpResponse
    {
        return $this->client->get('delegates/forging/getForgedByAccount', compact('generatorPublicKey'));
    }

    /**
     * @param string $secret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addDelegate(string $secret, array $parameters = []): HttpResponse
    {
        return $this->client->put('delegates', compact('secret') + $parameters);
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getNextForgers(): HttpResponse
    {
        return $this->client->get('delegates/getNextForgers');
    }

    /**
     * @param string $secret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function enableForging(string $secret, array $parameters = []): HttpResponse
    {
        return $this->client->post('delegates/forging/enable', compact('secret') + $parameters);
    }

    /**
     * @param string $secret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function disableForging(string $secret, array $parameters = []): HttpResponse
    {
        return $this->client->post('delegates/forging/disable', compact('secret') + $parameters);
    }

    /**
     * @param string $publicKey
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function forgingStatus(string $publicKey, array $parameters = []): HttpResponse
    {
        return $this->client->post('delegates/forging/disable', compact('publicKey') + $parameters);
    }
}
