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

class Account extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBalance(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/getBalance', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPublickey(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/getPublickey', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegates(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/delegates', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegatesFee(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/delegates/fee', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addDelegates(array $parameters = []): HttpResponse
    {
        return $this->client->put('accounts/delegates', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccount(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts', $parameters);
    }
}
