<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
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
    public function balance(string $address): HttpResponse
    {
        return $this->client->get('api/accounts/getBalance', compact('address'));
    }

    /**
     * Get the public key of an account.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function publickey(string $address): HttpResponse
    {
        return $this->client->get('api/accounts/getPublickey', compact('address'));
    }

    /**
     * Get the delegates of an account.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delegates(string $address): HttpResponse
    {
        return $this->client->get('api/accounts/delegates', compact('address'));
    }

    /**
     * Get the delegate fee of an account.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delegatesFee(string $address): HttpResponse
    {
        return $this->client->get('api/accounts/delegates/fee', compact('address'));
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
    public function createDelegates(string $secret, string $publicKey, string $secondSecret): HttpResponse
    {
        return $this->client->put('api/accounts/delegates', compact('secret', 'publicKey', 'secondSecret'));
    }

    /**
     * Returns account information of an address.
     *
     * @param string $address
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function account(string $address): HttpResponse
    {
        return $this->client->get('api/accounts', compact('address'));
    }

    /**
     * Get a list of accounts.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function accounts(): HttpResponse
    {
        return $this->client->get('api/accounts/getAllAccounts');
    }

    /**
     * Get a list of top accounts.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function top(): HttpResponse
    {
        return $this->client->get('api/accounts/top');
    }

    /**
     * Get the count of accounts.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function count(): HttpResponse
    {
        return $this->client->get('api/accounts/count');
    }
}
