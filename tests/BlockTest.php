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
class BlockTest extends TestCase
{
    /** @test */
    public function can_get_block()
    {
        // Arrange...
        $id = str_random(34);

        // Act...
        $response = $this->getClient()->api('Block')->getBlock($id);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_blocks()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getBlocks();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_epoch()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getEpoch();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_height()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getHeight();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_nethash()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getNethash();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_fee()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getFee();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_fees()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getFees();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_milestone()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getMilestone();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_reward()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getReward();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_supply()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getSupply();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_status()
    {
        // Act...
        $response = $this->getClient()->api('Block')->getStatus();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
