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

class Transactions extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getTransactions(array $parameters = []): HttpResponse
    {
        return $this->client->get('transactions', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getTransaction(array $parameters = []): HttpResponse
    {
        return $this->client->get('transactions/get', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getUnconfirmedTransaction(array $parameters = []): HttpResponse
    {
        return $this->client->get('transactions/unconfirmed/get', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getUnconfirmedTransactions(array $parameters = []): HttpResponse
    {
        return $this->client->get('transactions/unconfirmed', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addTransactions(array $parameters = []): HttpResponse
    {
        return $this->client->put('transactions', $parameters);
    }
}
