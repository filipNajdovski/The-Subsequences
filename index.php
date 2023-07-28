<?php

require_once __DIR__ . '/src/TheSubsequences.php';

// Custom test cases
function runCustomTestCases() {
    $theSubsequences = new TheSubsequences();

    // Test Case 1
    $A = 26;
    $B = 69;
    $C = 3;
    $expectedResult = 13;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 1: Result = $result (Expected: $expectedResult)\n";

    // Test Case 2
    $A = 11;
    $B = 100;
    $C = 4;
    $expectedResult = 18;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 2: Result = $result (Expected: $expectedResult)\n";

    // Test Case 3
    $A = 77;
    $B = 78;
    $C = 4;
    $expectedResult = 0;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 3: Result = $result (Expected: $expectedResult)\n";

    // Test Case 4
    $A = 13834;
    $B = 26066;
    $C = 1380;
    $expectedResult = 14;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 4: Result = $result (Expected: $expectedResult)\n";

    // Test Case 5
    $A = 1;
    $B = 1000000;
    $C = 1;
    $expectedResult = 468560;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 5: Result = $result (Expected: $expectedResult)\n";

    // Test Case 6
    $A = 25272;
    $B = 31576;
    $C = 757;
    $expectedResult = 33;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 6: Result = $result (Expected: $expectedResult)\n";

    // Test Case 7
    $A = 23051;
    $B = 27967;
    $C = 62;
    $expectedResult = 383;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 7: Result = $result (Expected: $expectedResult)\n";

    // Test Case 8
    $A = 6122;
    $B = 30043;
    $C = 8;
    $expectedResult = 8674;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 8: Result = $result (Expected: $expectedResult)\n";

    // Test Case 9
    $A = 10;
    $B = 999999;
    $C = 46;
    $expectedResult = 114265;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 9: Result = $result (Expected: $expectedResult)\n";

    // Test Case 10
    $A = 9;
    $B = 6405;
    $C = 95;
    $expectedResult = 172;
    $result = $theSubsequences->count($A, $B, $C);
    echo "Test Case 10: Result = $result (Expected: $expectedResult)\n";
}

// Run the custom test cases
runCustomTestCases();
