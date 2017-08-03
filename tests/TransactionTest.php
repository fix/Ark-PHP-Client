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
class TransactionTest extends TestCase
{
    /** @test */
    public function can_get_transaction()
    {
        // Arrange...
        $id = str_random(34);

        // Act...
        $response = $this->getClient()->api('Transaction')->transaction($id);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_transactions()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->transactions();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_unconfirmed_transaction()
    {
        // Arrange...
        $id = str_random(34);

        // Act...
        $response = $this->getClient()->api('Transaction')->unconfirmedTransaction($id);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_unconfirmed_transactions()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->unconfirmedTransactions();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_transactions()
    {
        // Arrange...
        $secret = str_random(34);
        $amount = rand();
        $recipientId = str_random(34);

        // Act...
        $response = $this->getClient()->api('Transaction')->create($secret, $amount, $recipientId);

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}
