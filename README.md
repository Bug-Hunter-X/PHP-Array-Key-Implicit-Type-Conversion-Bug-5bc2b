# PHP Array Key Type Conversion Bug

This repository demonstrates a subtle bug in PHP related to how it handles array keys. When you mix numeric and string keys that PHP can implicitly convert to integers, unexpected behavior can occur due to key overwriting.  The `bug.php` file shows the problematic code, while `bugSolution.php` offers a corrected version.

## Bug Description
The core issue is implicit type conversion of array keys. PHP might interpret string keys that look like numbers as integers. If these keys are not unique as integers, data loss can occur.

## Solution
Explicitly defining keys as strings eliminates ambiguity and prevents the unintended behavior.

## How to reproduce the bug
1. Clone the repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the correct output.