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

/**
 * @coversNothing
 */
class MultiSignatureTest extends TestCase
{
    /** @test */
    public function can_pending()
    {
        // Arrange...
        $publicKey = str_random(34);

        // Act...
        $response = $this->getClient()->api('MultiSignature')->pending($publicKey);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_sign()
    {
        // Arrange...
        $transactionId = str_random(34);
        $secret = str_random(34);

        // Act...
        $response = $this->getClient()->api('MultiSignature')->sign($transactionId, $secret);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_multisignature()
    {
        // Arrange...
        $min = rand();
        $lifetime = rand();
        $keysgroup = str_random(34);
        $secret = str_random(34);

        // Act...
        $response = $this->getClient()->api('MultiSignature')->create($min, $lifetime, $keysgroup, $secret);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_accounts()
    {
        // Arrange...
        $publicKey = str_random(34);

        // Act...
        $response = $this->getClient()->api('MultiSignature')->accounts($publicKey);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
