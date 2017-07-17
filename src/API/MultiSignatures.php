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

class MultiSignatures extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function pending(array $parameters = []): ?array
    {
        return $this->client->get('multisignatures/pending', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function sign(array $parameters = []): ?array
    {
        return $this->client->post('multisignatures/sign', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function addMultisignature(array $parameters = []): ?array
    {
        return $this->client->put('multisignatures', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getAccounts(array $parameters = []): ?array
    {
        return $this->client->get('multisignatures/accounts', $parameters)->json();
    }
}
