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
class BlockTest extends TestCase
{
    /** @test */
    public function can_get_block()
    {
        // Arrange...
        $id = str_random(34);

        // Act...
        $response = $this->getClient()->api('Block')->block($id);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_blocks()
    {
        // Act...
        $response = $this->getClient()->api('Block')->blocks();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_epoch()
    {
        // Act...
        $response = $this->getClient()->api('Block')->epoch();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_height()
    {
        // Act...
        $response = $this->getClient()->api('Block')->height();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_nethash()
    {
        // Act...
        $response = $this->getClient()->api('Block')->nethash();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_fee()
    {
        // Act...
        $response = $this->getClient()->api('Block')->fee();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_fees()
    {
        // Act...
        $response = $this->getClient()->api('Block')->fees();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_milestone()
    {
        // Act...
        $response = $this->getClient()->api('Block')->milestone();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_reward()
    {
        // Act...
        $response = $this->getClient()->api('Block')->reward();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_supply()
    {
        // Act...
        $response = $this->getClient()->api('Block')->supply();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_status()
    {
        // Act...
        $response = $this->getClient()->api('Block')->status();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
