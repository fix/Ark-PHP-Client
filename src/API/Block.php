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

class Block extends AbstractAPI
{
    /**
     * Get block by id.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBlock(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/get', $parameters);
    }

    /**
     *  Get all blocks.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBlocks(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks', $parameters);
    }

    /**
     * Get the blockchain epoch.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getEpoch(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getEpoch', $parameters);
    }

    /**
     * Get the blockchain height.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getHeight(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getHeight', $parameters);
    }

    /**
     * Get the blockchain nethash.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getNethash(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getNethash', $parameters);
    }

    /**
     * Get the transaction fee for sending "normal" transactions.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFee(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getFee', $parameters);
    }

    /**
     * Get the network fees.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFees(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getFees', $parameters);
    }

    /**
     * Get the blockchain milestone.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getMilestone(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getMilestone', $parameters);
    }

    /**
     * Get the blockchain reward.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getReward(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getReward', $parameters);
    }

    /**
     * Get the blockchain supply.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getSupply(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getSupply', $parameters);
    }

    /**
     * Get the blockchain status.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getStatus(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getStatus', $parameters);
    }
}
