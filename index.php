<?php
require_once __DIR__ . '/src/TheSubsequences.php';
require_once __DIR__ . '/tests/TheSubsequencesTest.php';

// Run the test cases
$suite = new PHPUnit\Framework\TestSuite();
$suite->addTestSuite('TheSubsequencesTest');
$result = new PHPUnit\Framework\TestResult();
$result->addListener(new PHPUnit\Framework\TextUI\ResultPrinter());

$suite->run($result);