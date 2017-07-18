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
        // Act...
        $response = $this->getClient()->api('Delegate')->search();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_voters()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->getVoters();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegate()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->getDelegate();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_delegates()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->getDelegates();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_fee()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->getFee();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_forged_by_account()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->getForgedByAccount();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_delegate()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->addDelegate();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_next_forgers()
    {
        // Act...
        $response = $this->getClient()->api('Delegate')->getNextForgers();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
