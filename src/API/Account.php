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
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBalance(string $address): HttpResponse
    {
        return $this->client->get('accounts/getBalance', compact('address'));
    }

    /**
     * Get the public key of an account.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPublickey(string $address): HttpResponse
    {
        return $this->client->get('accounts/getPublickey', compact('address'));
    }

    /**
     * Get the delegates of an account.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegates(string $address): HttpResponse
    {
        return $this->client->get('accounts/delegates', compact('address'));
    }

    /**
     * Get the delegate fee of an account.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDelegatesFee(string $address): HttpResponse
    {
        return $this->client->get('accounts/delegates/fee', compact('address'));
    }

    /**
     * Add a new delegate to an account.
     *
     * @param string $secret
     * @param string $publicKey
     * @param string $secondSecret
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addDelegates(string $secret, string $publicKey, string $secondSecret): HttpResponse
    {
        return $this->client->put('accounts/delegates', compact('secret', 'publicKey', 'secondSecret'));
    }

    /**
     * Returns account information of an address.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccount(string $address): HttpResponse
    {
        return $this->client->get('accounts', compact('address'));
    }
}
