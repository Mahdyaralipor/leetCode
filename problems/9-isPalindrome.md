# Palindrome Number Problem

## Problem Statement

Given an integer `x`, return `true` if `x` is a palindrome, and `false` otherwise.

### Definition
A **palindrome** is a number that reads the same backward as forward.

---

## Examples

### Example 1
**Input**:
`x = 121`

**Output**:
`true`

**Explanation**:  
`121` reads as `121` from left to right and from right to left.

---

### Example 2
**Input**:
`x = -121`

**Output**:
`false`

**Explanation**:  
From left to right, it reads `-121`. From right to left, it becomes `121-`. Therefore, it is not a palindrome.

---

### Example 3
**Input**:
`x = 10`

**Output**:
`false`

**Explanation**:  
Reads as `01` from right to left. Therefore, it is not a palindrome.

---

## Constraints
- `-2^31 <= x <= 2^31 - 1`

---

## Follow-Up
Could you solve this problem **without converting the integer to a string**?

---

## Solution Approaches

### Approach 1: Using String Conversion
This approach involves converting the integer to a string and checking if the string is the same when reversed.

### Approach 2: Without String Conversion
This approach involves reversing half of the integer and comparing it with the other half to determine if it is a palindrome.

---

## Key Points in Approach 2

1. Negative numbers and numbers ending with `0` (except `0` itself) cannot be palindromes.
2. Use arithmetic operations to reverse only half of the integer:
   - Extract digits using the modulo operator.
   - Build the reversed number from the extracted digits.
3. Compare the reversed half with the remaining half:
   - For even-length numbers, the two halves should be equal.
   - For odd-length numbers, ignore the middle digit by dividing the reversed half by `10`.

---

## Complexity Analysis

### Time Complexity
- Both approaches have a time complexity of `O(log10(x))`, where `x` is the input number. This is because the number of digits in `x` determines the number of iterations.

### Space Complexity
- **Approach 1**: Requires additional space to store the string representation of the number, so it has `O(n)` space complexity.
- **Approach 2**: Operates in constant space (`O(1)`), as no additional data structures are used.
