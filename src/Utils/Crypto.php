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

namespace BrianFaust\Ark\Utils;

use StephenHill\Base58;

class Crypto
{
    public function getAddress(string $publicKey, $version = 0x17)
    {
        // Public Key
        $ripemd160 = hash('ripemd160', hex2bin($publicKey), true);

        // Seed
        $seed = pack('C*', $version).$ripemd160;

        // Digest
        $digest = hash('sha256', $seed, true);
        $digest = hash('sha256', $digest, true);
        $digest = substr($digest, 0, 4);

        // Encode
        return (new Base58())->encode($seed.$digest);
    }
}
