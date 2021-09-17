<?php

namespace App;

use ApprovalTests\Approvals;
use PHPUnit\Framework\TestCase;

class SourceClassTest extends TestCase
{
    public function test_hello()
    {
        $sourceClass = new SourceClass();
        Approvals::verifyString($sourceClass->hello('Charles'));
    }
}
