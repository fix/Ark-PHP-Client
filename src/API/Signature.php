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

class Signature extends AbstractAPI
{
    /**
     * Get the fee for a signature.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function fee(): HttpResponse
    {
        return $this->client->get('api/signatures/fee');
    }

    /**
     * Create a new signature.
     *
     * @param string $secret
     * @param string $secondSecret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(string $secret, string $secondSecret, array $parameters = []): HttpResponse
    {
        return $this->client->put('api/signatures', compact('secret', 'secondSecret') + $parameters);
    }
}
