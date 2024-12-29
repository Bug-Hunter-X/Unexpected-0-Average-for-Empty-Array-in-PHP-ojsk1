# PHP Average Calculation Bug

This repository demonstrates a subtle bug in a PHP function designed to calculate the average of numbers within an array.  The function currently returns 0 when provided with an empty array, which might not be the expected behavior in all scenarios.

The `bug.php` file contains the buggy code. The `bugSolution.php` provides a refined version that handles the edge case more robustly.

## Bug Description

The `calculateAverage` function lacks explicit handling for the case where an empty array is passed as input. This leads to division by zero (although PHP implicitly handles this by returning 0), which might mask a more serious data error.

## Solution

The improved version in `bugSolution.php` incorporates a check for an empty array before proceeding with the average calculation.  If the array is empty, it throws a `LogicException` to signal the error condition.  This approach is more transparent and allows calling functions to handle the empty array case appropriately.