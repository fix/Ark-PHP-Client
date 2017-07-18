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

class Transaction extends AbstractAPI
{
    /**
     * Get a single transaction.
     *
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getTransaction(string $id): HttpResponse
    {
        return $this->client->get('api/transactions/get', compact('id'));
    }

    /**
     * Get all transactions.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getTransactions(array $parameters = []): HttpResponse
    {
        return $this->client->get('api/transactions', $parameters);
    }

    /**
     * Get a single unconfirmed transaction.
     *
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getUnconfirmedTransaction(string $id): HttpResponse
    {
        return $this->client->get('api/transactions/unconfirmed/get', compact('id'));
    }

    /**
     * Get all unconfirmed transactions.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getUnconfirmedTransactions(array $parameters = []): HttpResponse
    {
        return $this->client->get('api/transactions/unconfirmed', $parameters);
    }

    /**
     * Create a new transaction.
     *
     * @param string $secret
     * @param int    $amount
     * @param string $recipientId
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addTransactions(string $secret, int $amount, string $recipientId, array $parameters = []): HttpResponse
    {
        return $this->client->put('api/transactions', compact('secret', 'amount', 'recipientId') + $parameters);
    }
}
