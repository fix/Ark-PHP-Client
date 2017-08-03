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

class Block extends AbstractAPI
{
    /**
     * Get block by id.
     *
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function block(string $id): HttpResponse
    {
        return $this->client->get('api/blocks/get', compact('id'));
    }

    /**
     *  Get all blocks.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function blocks(array $parameters = []): HttpResponse
    {
        return $this->client->get('api/blocks', $parameters);
    }

    /**
     * Get the blockchain epoch.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function epoch(): HttpResponse
    {
        return $this->client->get('api/blocks/getEpoch');
    }

    /**
     * Get the blockchain height.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function height(): HttpResponse
    {
        return $this->client->get('api/blocks/getHeight');
    }

    /**
     * Get the blockchain nethash.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function nethash(): HttpResponse
    {
        return $this->client->get('api/blocks/getNethash');
    }

    /**
     * Get the transaction fee for sending "normal" transactions.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function fee(): HttpResponse
    {
        return $this->client->get('api/blocks/getFee');
    }

    /**
     * Get the network fees.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function fees(): HttpResponse
    {
        return $this->client->get('api/blocks/getFees');
    }

    /**
     * Get the blockchain milestone.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function milestone(): HttpResponse
    {
        return $this->client->get('api/blocks/getMilestone');
    }

    /**
     * Get the blockchain reward.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function reward(): HttpResponse
    {
        return $this->client->get('api/blocks/getReward');
    }

    /**
     * Get the blockchain supply.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function supply(): HttpResponse
    {
        return $this->client->get('api/blocks/getSupply');
    }

    /**
     * Get the blockchain status.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function status(): HttpResponse
    {
        return $this->client->get('api/blocks/getStatus');
    }
}
