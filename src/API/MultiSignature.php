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

class MultiSignature extends AbstractAPI
{
    /**
     * Get pending multi signature transactions.
     * @param string $publicKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function pending(string $publicKey): HttpResponse
    {
        return $this->client->get('api/multisignatures/pending', compact('publicKey'));
    }

    /**
     * Sign a new multi signature.
     *
     * @param string $transactionId
     * @param string $secret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function sign(string $transactionId, string $secret, array $parameters = []): HttpResponse
    {
        return $this->client->post('api/multisignatures/sign', compact('transactionId', 'secret') + $parameters);
    }

    /**
     * Create a new multi signature.
     *
     * @param int    $min
     * @param int    $lifetime
     * @param string $keysgroup
     * @param string $secret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(int $min, int $lifetime, string $keysgroup, string $secret, array $parameters = []): HttpResponse
    {
        return $this->client->put('api/multisignatures', compact('min', 'lifetime', 'keysgroup', 'secret') + $parameters);
    }

    /**
     * Get a list of accounts.
     * @param string $publicKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function accounts(string $publicKey): HttpResponse
    {
        return $this->client->get('api/multisignatures/accounts', compact('publicKey'));
    }
}
