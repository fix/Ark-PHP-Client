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
class SignatureTest extends TestCase
{
    /** @test */
    public function can_get_fee()
    {
        // Act...
        $response = $this->getClient()->api('Signature')->getFee();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_signature()
    {
        // Act...
        $response = $this->getClient()->api('Signature')->addSignature();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}