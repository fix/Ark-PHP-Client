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

class Accounts extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getBalance(array $parameters = []): ?array
    {
        return $this->client->get('accounts/getBalance', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getPublickey(array $parameters = []): ?array
    {
        return $this->client->get('accounts/getPublickey', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getDelegates(array $parameters = []): ?array
    {
        return $this->client->get('accounts/delegates', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getDelegatesFee(array $parameters = []): ?array
    {
        return $this->client->get('accounts/delegates/fee', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function addDelegates(array $parameters = []): ?array
    {
        return $this->client->put('accounts/delegates', $parameters)->json();
    }

    /**
     * @param array $parameters
     *
     * @return null|array
     */
    public function getAccount(array $parameters = []): ?array
    {
        return $this->client->get('accounts', $parameters)->json();
    }
}
