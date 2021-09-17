<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SourceClassTest extends TestCase
{
    public function test_hello()
    {
        $sourceClass = new SourceClass();
        $this->assertSame('hello Charles', $sourceClass->hello('Charles'));
    }
}
