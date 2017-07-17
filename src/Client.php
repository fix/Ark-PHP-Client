<?php

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Ark;

use BrianFaust\Http\Http;

class Client
{
    /** @var string */
    public $ip;

    /** @var int */
    public $port;

    /**
     * Create a new Ark client instance.
     *
     * @param string $ip
     * @param int    $port
     */
    public function __construct(string $ip, int $port)
    {
        $this->ip   = $ip;
        $this->port = $port;
    }

    /**
     * @param string $name
     *
     * @return \BrianFaust\Ark\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("http://{$this->ip}:{$this->port}/api/");

        $class = "BrianFaust\\Ark\\API\\{$name}";

        return new $class($client);
    }
}
