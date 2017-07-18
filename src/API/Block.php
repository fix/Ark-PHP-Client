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
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBlock(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/get', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBlocks(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getEpoch(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getEpoch', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getHeight(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getHeight', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getNethash(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getNethash', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFee(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getFee', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFees(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getFees', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getMilestone(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getMilestone', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getReward(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getReward', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getSupply(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getSupply', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getStatus(array $parameters = []): HttpResponse
    {
        return $this->client->get('blocks/getStatus', $parameters);
    }
}
