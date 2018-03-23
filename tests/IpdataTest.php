<?php

namespace Tests;

use Kielabokkie\Ipdata;
use Kielabokkie\Models\IpdataModel;
use PHPUnit\Framework\TestCase;

class IpdataTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testLookupWithoutIp()
    {
        $mock = \Mockery::mock(Ipdata::class);

        $mock->allows()
            ->lookup()
            ->once()
            ->andReturns(new IpdataModel(['ip' => '1.2.3.4']));

        $res = $mock->lookup();

        $this->assertEquals('1.2.3.4', $res->ip);
        $this->assertInstanceOf(IpdataModel::class, $res);
    }

    public function testLookupWithIp()
    {
        $mock = \Mockery::mock(Ipdata::class);

        $mock->allows()
            ->lookup('8.8.8.8')
            ->once()
            ->andReturns(new IpdataModel(['ip' => '8.8.8.8']));

        $res = $mock->lookup('8.8.8.8');

        $this->assertEquals('8.8.8.8', $res->ip);
        $this->assertInstanceOf(IpdataModel::class, $res);
    }
}
