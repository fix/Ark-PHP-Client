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
     * Get the balance of an account.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBalance(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/getBalance', $parameters);
    }

    /**
     * Get the public key of an account.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPublickey(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/getPublickey', $parameters);
    }

    /**
     * Get the delegates of an account.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegates(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/delegates', $parameters);
    }

    /**
     * Get the delegate fee of an account.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegatesFee(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts/delegates/fee', $parameters);
    }

    /**
     * Add a new delegate to an account.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addDelegates(array $parameters = []): HttpResponse
    {
        return $this->client->put('accounts/delegates', $parameters);
    }

    /**
     * Returns account information of an address.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccount(array $parameters = []): HttpResponse
    {
        return $this->client->get('accounts', $parameters);
    }
}
