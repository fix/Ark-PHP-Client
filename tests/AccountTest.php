<?php

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Ark;

use BrianFaust\Ark\Client;

/**
 * @coversNothing
 */
class AccountTest extends TestCase
{
    /** @test */
    public function can_get_balance()
    {
        // Arrange...
        $address = str_random(34);

        // Act...
        $response = $this->getClient()->api('Account')->getBalance($address);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_publickey()
    {
        // Arrange...
        $address = str_random(34);

        // Act...
        $response = $this->getClient()->api('Account')->getPublickey($address);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegates()
    {
        // Arrange...
        $address = str_random(34);

        // Act...
        $response = $this->getClient()->api('Account')->getDelegates($address);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegates_fee()
    {
        // Arrange...
        $address = str_random(34);

        // Act...
        $response = $this->getClient()->api('Account')->getDelegatesFee($address);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_delegates()
    {
        // Arrange...
        $secret = str_random(34);
        $publicKey = str_random(34);
        $secondSecret = str_random(34);

        // Act...
        $response = $this->getClient()->api('Account')->addDelegates($secret, $publicKey, $secondSecret);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_account()
    {
        // Arrange...
        $address = str_random(34);

        // Act...
        $response = $this->getClient()->api('Account')->getAccount($address);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_count()
    {
        // Act...
        $response = $this->getClient()->api('Account')->count();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
