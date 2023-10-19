# PHP SYNTAX - ARRAYS

1. Declare an array in PHP:
* Declaring an empty array
```php

$arr = array(); // Sử dụng hàm array()
$arr = []; // Sử dụng cú pháp ngắn gọn []

```
* Declaring an array with initial values
```php

$arr = array(1, 2, 3); // Sử dụng hàm array()
$arr = [1, 2, 3]; // Sử dụng cú pháp ngắn gọn []

```
***
2. In PHP, there are three main types of arrays:
**Indexed Array**
* an array with consecutive integer indexes starting from 0.
* the elements in the array are accessed and ordered based on the integer indexes.
```php

$numbers = array(1, 2, 3, 4, 5);

```

**Associative Array**
* an array with string keys as indexes. 
* each element in the array is accessed and ordered based on unique string keys.
```php

$person = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);

```

**Multidimensional Array**
* an array that contains other arrays.
```php

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

```
***
3. Some commonly used array functions in PHP:
* `array_push()`: Adds one or more elements to the end of an array.
```php

$arr = [1, 2, 3];
array_push($arr, 4, 5);
print_r($arr); // Output: Array([0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5)

```
* `array_pop()`: Removes and returns the last element of an array.
```php

$arr = [1, 2, 3];
$lastElement = array_pop($arr);
echo $lastElement; // Output: 3

```
* `array_shift()`: Removes and returns the first element of an array.
```php

$arr = [1, 2, 3];
$firstElement = array_shift($arr);
echo $firstElement; // Output: 1

```
* `array_unshift()`: Adds one or more elements to the beginning of an array.
```php

$arr = [2, 3];
array_unshift($arr, 1);
print_r($arr); // Output: Array([0] => 1 [1] => 2 [2] => 3)

```
* `array_merge()`: Merges two or more arrays into a single array.
```php
$arr1 = [1, 2];
$arr2 = [3, 4];
$mergedArray = array_merge($arr1, $arr2);
print_r($mergedArray); // Output: Array([0] => 1 [1] => 2 [2] => 3 [3] => 4)

```
* `array_slice()`: Extracts a slice of an array.
```php

$arr = [1, 2, 3, 4, 5];
$slice = array_slice($arr, 2, 3);
print_r($slice); // Output: Array([0] => 3 [1] => 4 [2] => 5)

```

* `array_reverse()`: Reverses the order of elements in an array.
```php

$arr = [1, 2, 3];
$reversedArray = array_reverse($arr);
print_r($reversedArray); // Output: Array([0] => 3 [1] => 2 [2] => 1)

```
* `array_search()`: Searches for a value in an array and returns its corresponding key.
```php

$arr = [1, 2, 3];
$key = array_search(2, $arr);
echo $key; // Output: 1

```
* `array_key_exists()`: Checks if a specified key exists in an array.
```php

$arr = ['key' => 'value'];
if (array_key_exists('key', $arr)) {
    echo "Key exists in the array";
} else {
    echo "Key does not exist in the array";
}
// Output: Key exists in the array

```

### RESOURCES:
* [PHP Arrays](https://www.w3schools.com/php/php_arrays.asp)
* [Tự học PHP -7. Tìm hiểu về mảng trong PHP](https://youtu.be/XgUyogJ25xg?list=PLq3KxntIWWrLpDmH_9YxuaF_yHA5QKHlN)