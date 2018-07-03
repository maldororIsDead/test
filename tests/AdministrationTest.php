<?php

namespace Tests;

use App\Administration\Administration;
use PHPUnit\Framework\TestCase;

class AdministrationTest extends TestCase
{
    /** @test */

    public function test_is_rector()
    {
        $administration = new Administration;
        $administration->setRector('Ковалёв');
        $this->assertSame(0, $administration->isRector('ковалёв'));
    }

    /** @test */

    public function test_get_set_rector()
    {
        $administration = new Administration;
        $administration->setRector('Ковалёв');
        $this->assertSame('Ковалёв', $administration->getRector());
    }

}