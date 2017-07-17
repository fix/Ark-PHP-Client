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
    /** @var array */
    public $network;

    /**
     * Create a new Ark client instance.
     *
     * @param array $network
     */
    public function __construct(array $network)
    {
        $this->network = $network;
    }

    /**
     * @param string $name
     *
     * @return \BrianFaust\Ark\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $ip   = $this->network['activepeer']['ip'];
        $port = $this->network['activepeer']['port'];

        $client = Http::withBaseUri("http://{$ip}:{$port}/api/")->withHeaders([
            'nethash' => $this->network['nethash'],
            'version' => $this->network['version'],
            'port'    => $this->network['activepeer']['port'],
        ]);

        $class = "BrianFaust\\Ark\\API\\{$name}";

        return new $class($client);
    }
}
