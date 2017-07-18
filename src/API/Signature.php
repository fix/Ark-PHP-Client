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

class Signature extends AbstractAPI
{
    /**
     * Get the fee for a signature.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getFee(array $parameters = []): HttpResponse
    {
        return $this->client->get('signatures/fee', $parameters);
    }

    /**
     * Create a new signature.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addSignature(array $parameters = []): HttpResponse
    {
        return $this->client->put('signatures', $parameters);
    }
}
