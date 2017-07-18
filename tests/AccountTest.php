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

use BrianFaust\Ark\Client;

/**
 * @coversNothing
 */
class AccountTest extends TestCase
{
    /** @test */
    public function can_get_balance()
    {
        // Act...
        $response = $this->getClient()->api('Account')->getBalance();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_publickey()
    {
        // Act...
        $response = $this->getClient()->api('Account')->getPublickey();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegates()
    {
        // Act...
        $response = $this->getClient()->api('Account')->getDelegates();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegates_fee()
    {
        // Act...
        $response = $this->getClient()->api('Account')->getDelegatesFee();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_delegates()
    {
        // Act...
        $response = $this->getClient()->api('Account')->addDelegates();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_account()
    {
        // Act...
        $response = $this->getClient()->api('Account')->getAccount();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
