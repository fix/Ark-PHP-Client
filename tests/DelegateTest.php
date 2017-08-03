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
class DelegateTest extends TestCase
{
    /** @test */
    public function can_count()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->count();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_search()
    {
        // Arrange...
        $q = str_random(34);

        // Act...
        $response = $this->getClient()->api('Delegate')->search($q);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_voters()
    {
        // Arrange...
        $publicKey = str_random(34);

        // Act...
        $response = $this->getClient()->api('Delegate')->voters($publicKey);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegate()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->delegate();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegates()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->delegates();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_fee()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->fee();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_forged_by_account()
    {
        // Arrange...
        $generatorPublicKey = str_random(34);

        // Act...
        $response = $this->getClient()->api('Delegate')->forgedByAccount($generatorPublicKey);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_delegate()
    {
        // Arrange...
        $secret = str_random(34);

        // Act...
        $response = $this->getClient()->api('Delegate')->create($secret);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_next_forgers()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->nextForgers();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
