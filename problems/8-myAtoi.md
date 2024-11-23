# myAtoi Function Implementation in Python

## Problem Statement

Implement the `myAtoi(string s)` function, which converts a string to a 32-bit signed integer based on the following algorithm:

### Algorithm

1. **Whitespace Handling**: Ignore any leading whitespace (`' '`).
2. **Signedness Detection**: Determine the sign by checking if the next character is `'-'` or `'+'`. If neither is present, assume a positive sign.
3. **Integer Conversion**: Read the integer, skipping leading zeros, until a non-digit character is encountered or the end of the string is reached. If no digits are read, return `0`.
4. **Range Clamping**: If the integer exceeds the 32-bit signed integer range `[-2^31, 2^31 - 1]`:
   - Round values less than `-2^31` to `-2^31`.
   - Round values greater than `2^31 - 1` to `2^31 - 1`.
5. **Return Result**: Return the final integer value.

---

## Examples

### Example 1
**Input**:
```python
s = "42"
