# Regular Expression Matching

## Problem Statement

Given an input string `s` and a pattern `p`, implement regular expression matching with support for the following:

- `.`: Matches **any single character**.
- `*`: Matches **zero or more** of the preceding element.

The matching should cover the **entire input string** (not partial).

---

## Examples

### Example 1:
**Input**:  
`s = "aa"`  
`p = "a"`  

**Output**:  
`false`  

**Explanation**:  
`"a"` does not match the entire string `"aa"`.

---

### Example 2:
**Input**:  
`s = "aa"`  
`p = "a*"`  

**Output**:  
`true`  

**Explanation**:  
`'*'` means zero or more of the preceding element, `'a'`.  
By repeating `'a'` once, it becomes `"aa"`.

---

### Example 3:
**Input**:  
`s = "ab"`  
`p = ".*"`  

**Output**:  
`true`  

**Explanation**:  
`".*"` means "zero or more (`*`) of any character (`.`)".

---

## Constraints

- \( 1 \leq \text{s.length} \leq 20 \)
- \( 1 \leq \text{p.length} \leq 20 \)
- `s` contains only lowercase English letters.
- `p` contains only lowercase English letters, `.`, and `*`.
- For each appearance of the character `*`, there will be a **previous valid character** to match.
