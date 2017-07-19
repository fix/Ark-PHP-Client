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

class Transport extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function list(): HttpResponse
    {
        return $this->client->get('peer/list');
    }

    /**
     * @param array $ids
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function blocksCommon(array $ids): HttpResponse
    {
        return $this->client->get('peer/blocks/common', ['ids' => implode(',', $ids)]);
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function blocks(): HttpResponse
    {
        return $this->client->get('peer/blocks');
    }

    /**
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function block(string $id): HttpResponse
    {
        return $this->client->get('peer/block', compact('id'));
    }

    /**
     * @param array $block
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addBlock(array $block): HttpResponse
    {
        return $this->client->post('peer/blocks', compact('block'));
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function transactions(): HttpResponse
    {
        return $this->client->get('peer/transactions');
    }

    /**
     * @param array $ids
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function transactionsFromIds(array $ids): HttpResponse
    {
        return $this->client->get('peer/transactionsFromIds', ['ids' => implode(',', $ids)]);
    }

    /**
     * @param array $transactions
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addTransactions(array $transactions): HttpResponse
    {
        return $this->client->post('peer/transactions', compact('transactions'));
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function height(): HttpResponse
    {
        return $this->client->get('peer/height');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function status(): HttpResponse
    {
        return $this->client->get('peer/status');
    }
}
