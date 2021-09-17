<?php

namespace App;

use ApprovalTests\CombinationApprovals;
use PHPUnit\Framework\TestCase;

class SourceClassTest extends TestCase
{
    public function test_hello()
    {
        $firstnames = ['Charles', 'Maks'];

        CombinationApprovals::verifyAllCombinations1(function ($firstname) {
            $sourceClass = new SourceClass();
            return $sourceClass->hello($firstname);
        }, $firstnames);

    }
}
