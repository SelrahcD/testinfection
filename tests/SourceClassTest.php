<?php

namespace App;

use ApprovalTests\CombinationApprovals;
use ApprovalTests\Reporters\QuietReporter;
use PHPUnit\Framework\TestCase;

class SourceClassTest extends TestCase
{
    public function test_hello()
    {
        $firstnames = ['Charles', 'Maks'];

        $reporter = getenv('INFECTION') === "1" ? new QuietReporter() : null;

        CombinationApprovals::verifyAllCombinations1(function ($firstname) {
            $sourceClass = new SourceClass();
            return $sourceClass->hello($firstname);
        }, $firstnames, $reporter);

    }
}
