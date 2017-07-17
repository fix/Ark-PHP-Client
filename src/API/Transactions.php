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

class Transactions extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getTransactions(array $parameters = []): ?array
    {
        return $this->client->get('transactions', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getTransaction(array $parameters = []): ?array
    {
        return $this->client->get('transactions/get', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getUnconfirmedTransaction(array $parameters = []): ?array
    {
        return $this->client->get('transactions/unconfirmed/get', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getUnconfirmedTransactions(array $parameters = []): ?array
    {
        return $this->client->get('transactions/unconfirmed', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function addTransactions(array $parameters = []): ?array
    {
        return $this->client->put('transactions', $parameters)->json();
    }
}
