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

class Blocks extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getBlock(array $parameters = []): ?array
    {
        return $this->client->get('blocks/get', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getBlocks(array $parameters = []): ?array
    {
        return $this->client->get('blocks', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getEpoch(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getEpoch', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getHeight(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getHeight', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getNethash(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getNethash', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getFee(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getFee', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getFees(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getFees', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getMilestone(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getMilestone', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getReward(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getReward', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getSupply(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getSupply', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getStatus(array $parameters = []): ?array
    {
        return $this->client->get('blocks/getStatus', $parameters)->json();
    }
}
