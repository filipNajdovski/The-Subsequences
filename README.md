# The-Subsequences

Task assignment for a technical interview

The Subsequences is a PHP assignment that involves finding numbers between two given integers such that the digits of a third given integer form a subsequence of the numbers' digits. This repository contains the PHP implementation of the assignment along with custom test cases for verification.

## Task Description

Let's define a function `split(n)` where `n` is an integer. This function returns an array of the digits of `n`. For example, `split(5125)` returns `[5,1,2,5]`.

You are given three integer numbers: `A`, `B`, and `C`. The task is to find all numbers `X` between `A` and `B` (inclusive) such that `split(C)` is a subsequence of `split(X)`. The goal is to return the count of such numbers and the list of numbers found.

### Input Parameters

- `A`: integer, the starting point (1 ≤ A ≤ 1000000)
- `B`: integer, the end point (1 ≤ B ≤ 1000000)
- `C`: integer, the number whose digits will be searched for (1 ≤ C ≤ 1000000)
- `A` will always be less than or equal to `B`

### Return Value

- `count`: integer - the count of numbers between `A` and `B` (inclusive) that fulfill the problem requirements.

## Installation and Execution

1. Clone the repository to your local machine:

```bash
git clone https://github.com/filipNajdovski/The-Subsequences.git
cd the-subsequences
```

2. Execute the index.php file to run the custom test cases::

```bash
php index.php
