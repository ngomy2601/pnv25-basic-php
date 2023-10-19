# PHP SYNTAX - CONDITIONALS
Use conditional statements to check a condition and execute different blocks of code based on the result of the condition.

1. if
The if statement is used to execute a block of code if a condition is true.
```php
$age = 25;
if ($age >= 18) {
    echo "You are an adult.";
}
// Output: You are an adult.
```

2. if-else
The if-else statement is used to execute one block of code if the condition is true and another block of code if the condition is false.
```php
$age = 15;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
// Output: You are a minor.
```

3. if-elseif-else
The if-elseif-else statement allows you to check multiple conditions and execute corresponding blocks of code.
```php
$score = 85;
if ($score >= 90) {
    echo "Excellent!";
} elseif ($score >= 70) {
    echo "Good job!";
} else {
    echo "Keep practicing!";
}
// Output: Good job!
```

4. switch
The switch statement allows you to check different values of a variable and execute corresponding blocks of code.
```php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    default:
        echo "Today is another day.";
        break;
}
// Output: Today is Monday.
```

### RESOURCES:
* [PHP if...else...elseif Statements](https://www.w3schools.com/php/php_if_else.asp)
* [PHP switch Statement](https://www.w3schools.com/php/php_switch.asp)
* [Tự học PHP -8. Câu điều kiện if else, switch case trong PHP](https://youtu.be/ikEgwkPnMTc?list=PLq3KxntIWWrLpDmH_9YxuaF_yHA5QKHlN)