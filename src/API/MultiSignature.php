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

class MultiSignature extends AbstractAPI
{
    /**
     * @param string $publicKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function pending(string $publicKey): HttpResponse
    {
        return $this->client->get('api/multisignatures/pending', compact('publicKey'));
    }

    /**
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
     * @param int    $min
     * @param int    $lifetime
     * @param string $keysgroup
     * @param string $secret
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addMultisignature(int $min, int $lifetime, string $keysgroup, string $secret, array $parameters = []): HttpResponse
    {
        return $this->client->put('api/multisignatures', compact('min', 'lifetime', 'keysgroup', 'secret') + $parameters);
    }

    /**
     * @param string $publicKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccounts(string $publicKey): HttpResponse
    {
        return $this->client->get('api/multisignatures/accounts', compact('publicKey'));
    }
}
