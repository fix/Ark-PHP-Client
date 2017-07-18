<?php

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
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
        // Act...
        $response = $this->getClient()->api('MultiSignature')->pending();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_sign()
    {
        // Act...
        $response = $this->getClient()->api('MultiSignature')->sign();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_multisignature()
    {
        // Act...
        $response = $this->getClient()->api('MultiSignature')->addMultisignature();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_accounts()
    {
        // Act...
        $response = $this->getClient()->api('MultiSignature')->getAccounts();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
