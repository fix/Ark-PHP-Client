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

namespace BrianFaust\Tests\Ark;

use BrianFaust\Ark\Utils\Crypto;

/**
 * @coversNothing
 */
class CryptoTest extends TestCase
{
    /** @test */
    public function can_get_balance()
    {
        // Arrange...
        $publicKey = '026972bdafa405f33a293b047798ff9cef3d2c3ab59e89c04d394df35147c17921';
        $address = 'Aan1H7m2T6yBVGjRBAa8HYW8xdfoPmrNwD';

        // Act...
        $result = (new Crypto())->getAddress($publicKey);

        // Assert...
        $this->assertSame($result, $address);
    }
}
