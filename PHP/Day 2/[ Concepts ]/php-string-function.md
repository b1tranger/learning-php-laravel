PHP offers a rich set of built-in functions for string manipulation. Whether you are cleaning up user input or formatting data for display, these functions are essential tools.

### Useful Built-in String Functions

| Function | Description | Example |
| --- | --- | --- |
| **`strlen()`** | Returns the length of a string. | `strlen("Hello")` returns `5`. |
| **`str_replace()`** | Replaces some characters with others in a string. | `str_replace("World", "PHP", "Hello World")` → `"Hello PHP"` |
| **`strpos()`** | Finds the position of the first occurrence of a substring. | `strpos("Hello world", "world")` returns `6`. |
| **`substr()`** | Returns a part of a string (substring). | `substr("Hello PHP", 0, 5)` returns `"Hello"`. |
| **`strtolower()`** | Converts a string to lowercase. | `strtolower("HELLO")` returns `"hello"`. |
| **`strtoupper()`** | Converts a string to uppercase. | `strtoupper("hello")` returns `"HELLO"`. |
| **`trim()`** | Removes whitespace from both sides of a string. | `trim("  hello  ")` returns `"hello"`. |
| **`explode()`** | Breaks a string into an array based on a delimiter. | `explode(",", "red,blue")` returns `["red", "blue"]`. |

---

### Looping Through an Array

In PHP, the most common and "beginner-friendly" way to loop through an array is using the **`foreach`** loop. It is designed specifically to iterate over array elements without needing a counter variable.

```php
<?php
// Define a simple array
$languages = ["PHP", "JavaScript", "Python", "SQL"];

echo "List of languages:\n";

// The foreach loop
foreach ($languages as $lang) {
    echo "- " . $lang . "\n";
}
?>

```

**How it works:**

1. **`$languages`**: This is the array you want to loop through.
2. **`as $lang`**: On each iteration, the value of the current element is assigned to the variable `$lang`.
3. The loop continues until it reaches the last element of the array.

Would you like me to show you how to use a `foreach` loop with **associative arrays** (keys and values) as well?