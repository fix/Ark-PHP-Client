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

use BrianFaust\Ark\Client;
use Mockery as m;
use BrianFaust\Ark\Utils\Calculator;

/**
 * @coversNothing
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function can_calculate_with_floats()
    {
        // Arrange...
        $mock = m::mock(Calculator::class);
        $votingPool = 1000000.00;
        $userPool = 10000.00;
        $expectedShare = 3.165;

        // Expect...
        $mock->shouldReceive('setVotingPool')->with($votingPool)->andReturn([]);
        $mock->shouldReceive('perDay')->with($userPool)->andReturn($expectedShare);

        // Act...
        $calculator = new Calculator(422, 75);
        $calculator->setVotingPool($votingPool);
        $result = $calculator->perDay($userPool);

        // Assert...
        $this->assertSame($expectedShare, $result);
    }

    /** @test */
    public function can_calculate_with_decimals()
    {
        // Arrange...
        $mock = m::mock(Calculator::class);
        $votingPool = '1,000,000';
        $userPool = '10,000';
        $expectedShare = 3.165;

        // Expect...
        $mock->shouldReceive('setVotingPool')->with($votingPool)->andReturn([]);
        $mock->shouldReceive('perDay')->with($userPool)->andReturn($expectedShare);

        // Act...
        $calculator = new Calculator(422, 75);
        $calculator->setVotingPool($votingPool);
        $result = $calculator->perDay($userPool);

        // Assert...
        $this->assertSame($expectedShare, $result);
    }

    /** @test */
    public function can_calculate_with_integers()
    {
        // Arrange...
        $mock = m::mock(Calculator::class);
        $votingPool = 10000000;
        $userPool = 100000;
        $expectedShare = 3.165;

        // Expect...
        $mock->shouldReceive('setVotingPool')->with($votingPool)->andReturn([]);
        $mock->shouldReceive('perDay')->with($userPool)->andReturn($expectedShare);

        // Act...
        $calculator = new Calculator(422, 75);
        $calculator->setVotingPool($votingPool);
        $result = $calculator->perDay($userPool);

        // Assert...
        $this->assertSame($expectedShare, $result);
    }
}
