# PHP strpos() Function and Loose Comparison Bug

This repository demonstrates a common yet subtle bug in PHP related to the `strpos()` function and loose comparison operators. The `strpos()` function returns `false` if the needle is not found, and `0` if it's found at the beginning of the haystack.  Loose comparison (`!=`) with `false` will cause unexpected results when the needle is at the beginning.

## Bug Description
The provided code utilizes loose comparison to check if a substring exists within a string using `strpos()`. This leads to an incorrect result when the substring is found at the very beginning of the string because `0` (the return value of `strpos()` in this case) evaluates to `false` in loose comparison, resulting in unexpected true or false outputs. 

## Solution
The bug is resolved by using strict comparison (`!==`) with `false`, ensuring correct evaluation, regardless of the position of the substring.