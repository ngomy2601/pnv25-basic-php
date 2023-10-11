# PHP SYNTAX - BASICS

## Start PHP code:
1. Canonical PHP Tags: It is a common way.
```php

<?php
    # lệnh echo dùng để in ra màn hình
    echo "Hello world!";
?>

```
2. Short HTML Tags (SGML)
3. HTML Script Tags

**Note**:  
* **Short HTML Tags** and **HTML Script Tags** can be found here for more information: [PHP | Cú pháp cơ bản](https://hocphp.net/co-ban/php_basic_syntax/)

## Comments:
1. Commenting a single line (C/C+ style): using //
```php

<?php
    // đây là một dòng comment đơn kiểu C/C+
    // không thể kéo dài thêm vào những dòng khác
    echo "Hello world!!!";
?>

```
2. Commenting a single line (Unix shell style): using #
```php

<?php
    # đây là một dòng comment đơn kiểu Unix shell
    # không thể kéo dài thêm vào những dòng khác
    echo "Hello world!!!";
?>

```
3. Commenting a paragraph (many lines): using /*  … */
```php

<?php
    /* Đây là một comment nhiều dòng
    Ở trong PHP, biến được viết bắt đầu
    bằng cách thêm kí tự $ vào trước tên của nó.*/
 
    $geek = "Hello world!";
    echo $geek;
?>

```

## Display output:
* **echo** - display output directly on the browser
```php

echo "Hello, world!";

```

* **print** - display output directly on the browser
```php

print "Hello, world!";

```
* **var_dump** - display detailed information about a variable or object, including data type, size, and value
```php

$data = [1, 2, 3];
var_dump($data);

```
* **printf** - format and display output based on a specific pattern
```php

$name = "John";
$age = 25;
printf("My name is %s and I am %d years old.", $name, $age);

```
* **print_r** - display information about a variable or array in a readable format. It is a good way to debug.
```php

$data = array(
    'name' => 'John Doe',
    'age' => 25,
    'email' => 'johndoe@example.com'
);

print_r($data);

```


### Comparison between echo and print:
**echo**
* is a statement
* can be assigned 1 or multiple parameters
* not return any value
* can be used with or without parentheses ()

**print**
* is a function
* can be assigned only 1 parameter
* return a value of 1
* can be used with or without parentheses ()

*Resources*:
* [So sánh print và echo trong PHP](https://cafedev.vn/tu-hoc-php-so-sanh-print-va-echo-trong-php/)

## Variables:
1. Declare a variable in PHP must follow the below rules:
* A variable starts with the `$` sign, followed by the name of the variable
* A variable name must start with a letter or the underscore character
* A variable name cannot start with a number
* A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
* Variable names are case-sensitive (`$age` and `$AGE` are two different variables)
```php

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>

```

2. In PHP, there are three different types of variable scopes as follows:
1. **Global variables:** Global variables can be accessed from anywhere in the program. However, in order to modify a global variable, it must be declared as global within the function where it is being modified. To declare a variable as global, the "global" keyword is placed before its name.

```php

$name = "John Doe";

function greet() {
    global $name;
    echo "Hello, " . $name . "!";
}

greet();

```
2. **Local variables:** A variable declared within a function is considered a local variable and can only be referenced within that function. Regardless of assigning a value outside the function, it is considered a completely different variable from the one within the function.

```php

$name = "John Doe"; // Biến toàn cục

function greet() {
    $name = "Jane Smith"; // Biến cục bộ
    echo "Hello, " . $name . "!"; // Hiển thị giá trị của biến cục bộ
}

greet();
echo "Hello, " . $name . "!"; // Hiển thị giá trị của biến toàn cục

```

3. **Static variables:** In contrast, variables declared within function parameters will be destroyed when exiting the function. On the other hand, static variables will retain their value even when exiting the function and will keep that value when the function is called again. You can declare a variable as static by using the "static" keyword placed before the variable name.

```php

function incrementCounter() {
    static $counter = 0; // Biến static
    
    $counter++;
    echo "Counter: " . $counter . "<br>";
}

incrementCounter(); // Counter: 1
incrementCounter(); // Counter: 2
incrementCounter(); // Counter: 3

```

## Constants:
* syntax: `define(name, value)`
```php

define("SCHOOL_NAME", "PNV");

```
* using an underscore (_) to separate words in naming constants.
* should be written entirely in uppercase letters
* naming constants is similar to naming variables
