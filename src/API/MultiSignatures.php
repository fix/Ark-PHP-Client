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

class MultiSignatures extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function pending(array $parameters = []): HttpResponse
    {
        return $this->client->get('multisignatures/pending', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function sign(array $parameters = []): HttpResponse
    {
        return $this->client->post('multisignatures/sign', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addMultisignature(array $parameters = []): HttpResponse
    {
        return $this->client->put('multisignatures', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccounts(array $parameters = []): HttpResponse
    {
        return $this->client->get('multisignatures/accounts', $parameters);
    }
}
