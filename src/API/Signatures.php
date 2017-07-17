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

class Signatures extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getFee(array $parameters = []): ?array
    {
        return $this->client->get('signatures/fee', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function addSignature(array $parameters = []): ?array
    {
        return $this->client->put('signatures/addSignature', $parameters)->json();
    }
}
