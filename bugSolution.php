The solution is to use strict comparison (`!==`) instead of loose comparison (`!=`) when checking the return value of `strpos()`. This will correctly distinguish between `false` (substring not found) and `0` (substring found at the beginning).

```php
function checkNeedle($haystack, $needle) {
  if (strpos($haystack, $needle) !== false) {
    return true;
  } else {
    return false;
  }
}

$result1 = checkNeedle('hello world', 'hello'); //true
$result2 = checkNeedle('hello world', 'world');//true
$result3 = checkNeedle('hello world', 'xyz'); //false

var_dump($result1, $result2, $result3); // bool(true) bool(true) bool(false)
```