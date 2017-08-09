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

class Transport extends AbstractAPI
{
    /**
     * Get a list of peers.
     * @return \BrianFaust\Http\HttpResponse
     */
    public function list(): HttpResponse
    {
        return $this->client->get('peer/list');
    }

    /**
     * Get a list of blocks by ids.
     * @param array $ids
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function blocksCommon(array $ids): HttpResponse
    {
        return $this->client->get('peer/blocks/common', ['ids' => implode(',', $ids)]);
    }

    /**
     * Get all single block.
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function block(string $id): HttpResponse
    {
        return $this->client->get('peer/block', compact('id'));
    }

    /**
     * Get all blocks.
     * @return \BrianFaust\Http\HttpResponse
     */
    public function blocks(): HttpResponse
    {
        return $this->client->get('peer/blocks');
    }

    /**
     * Create a new block.
     * @param array $block
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function createBlock(array $block): HttpResponse
    {
        return $this->client->post('peer/blocks', compact('block'));
    }

    /**
     * Get all transactions.
     * @return \BrianFaust\Http\HttpResponse
     */
    public function transactions(): HttpResponse
    {
        return $this->client->get('peer/transactions');
    }

    /**
     * Get a list of transactions by ids.
     * @param array $ids
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function transactionsFromIds(array $ids): HttpResponse
    {
        return $this->client->get('peer/transactionsFromIds', ['ids' => implode(',', $ids)]);
    }

    /**
     * Create a new transaction.
     * @param array $transactions
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function createTransactions(array $transactions): HttpResponse
    {
        return $this->client->post('peer/transactions', compact('transactions'));
    }

    /**
     * Get the blockchain height.
     * @return \BrianFaust\Http\HttpResponse
     */
    public function height(): HttpResponse
    {
        return $this->client->get('peer/height');
    }

    /**
     * Get the blockchain status.
     * @return \BrianFaust\Http\HttpResponse
     */
    public function status(): HttpResponse
    {
        return $this->client->get('peer/status');
    }
}
