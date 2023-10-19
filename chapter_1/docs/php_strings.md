# PHP SYNTAX - STRINGS

1. Declare a string in PHP:
* Using single quotes ('') 
```php
$string1 = 'Hello, world!';
```
or double quotes ("")
```php
$string2 = "Hello, world!";
```
* Single quotes preserve the exact value of the string without processing variables inside.
```php
$name = "John";
$string = 'Hello, $name!'; // Output: Hello, $name!
```
* Double quotes allow for variable interpolation and processing of escape characters within the string.
```php
$name = "John";
$string = "Hello, $name!"; // Output: Hello, John!
```
* Escape characters like `\n` (newline) and `\t` (tab) are processed only within double-quoted strings.
```php
$string = "Hello\nWorld";
// Output:
// Hello
// World
```

```php
$string = "Hello\tWorld";
// Output: Hello    World
```
***

2. Some commonly used functions to manipulate strings:
* **Length**: Use `strlen()` to calculate the length of a string.
```php
$string = "Hello, world!";
$length = strlen($string);
// Output: 13
```
* **Substring**: Extract a portion of a string with `substr()`.
```php
$string = "Hello, World!";
$substring = substr($string, 7, 5);
// Output: World
```
* **Concatenation**: Combine strings using `.` or `concat()`.
```php
$string1 = "Hello";
$string2 = "World";
$concatenatedString = $string1 . ", " . $string2 . "!";
// Output: Hello, World!
```
* **Search**: Find substrings with `strpos()`.
```php
$string = "Hello, World!";
$position = strpos($string, "World");
// Output: 7
```
* **Replacement**: Replace substrings using `str_replace()`.
```php
$string = "Hello, World!";
$newString = str_replace("World", "John", $string);
// Output: Hello, John!
```
* **Case Conversion**: Convert strings to lowercase or uppercase with `strtolower()` and `strtoupper()`.
```php
$string = "Hello, World!";
$lowercase = strtolower($string);
// Output: hello, world!
```

```php
$string = "Hello, World!";
$uppercase = strtoupper($string);
// Output: HELLO, WORLD!
```
* **Count Words**: Use `str_word_count()` to count the number of words in a string.
```php
$string = "This is a sample sentence.";
$numWords = str_word_count($string);
// Output: 5
```
* **Reverse**: Reverse the order of characters in a string using `strrev()`.
```php
$string = "Hello, World!";
$reversedString = strrev($string);
// Output: "!dlroW ,olleH"
```
### RESOURCES:
* [PHP Strings](https://www.w3schools.com/php/php_string.asp)
* [Tự học PHP -6. Tìm hiểu về chuỗi - String trong PHP](https://youtu.be/VkW0kSdyVqM?list=PLq3KxntIWWrLpDmH_9YxuaF_yHA5QKHlN)