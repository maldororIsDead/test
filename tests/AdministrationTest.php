<?php

namespace Tests;

use App\Administration\Administration;
use PHPUnit\Framework\TestCase;

class AdministrationTest extends TestCase
{
    /** @test */

    function test_has_rector()
    {
        $administration = new Administration;
        $administration->setRector('Ковалёв');
        $this->assertSame(true, $administration->hasRector('Ковалёв'));
    }

    function test_get_set_rector()
    {
        $administration = new Administration;
        $administration->setRector('Ковалёв');
        $this->assertSame('Ковалёв', $administration->getRector());
    }

}