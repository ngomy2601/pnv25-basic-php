# PHP SYNTAX - LOOPS

Use loops to execute a set of statements repeatedly either a certain number of times or until a condition is met.

1. for
The for loop is used when you know the fixed number of iterations.

```php
for ($i = 0; $i < 10; $i++) {
    echo $i . ' ';
}
// Output: 0 1 2 3 4 5 6 7 8 9
```

2. while
The while loop is used when you want to repeat a block of code until a condition is met.
```php
$i = 0;
while ($i < 10) {
    echo $i . ' ';
    $i++;
}
// Output: 0 1 2 3 4 5 6 7 8 9
```

3. do-while
The do-while loop is similar to the while loop, but it checks the condition at the end of the loop, ensuring that the block of code is executed at least once.
```php
$i = 0;
do {
    echo $i . ' ';
    $i++;
} while ($i < 10);
// Output: 0 1 2 3 4 5 6 7 8 9
```

4. foreach
The foreach loop is used to iterate over elements in an array or an object.
```php
$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
    echo $value . ' ';
}
// Output: 1 2 3 4 5
```

### RESOURCES:
* [PHP while Loop](https://www.w3schools.com/php/php_looping_while.asp)
* [PHP do while Loop](https://www.w3schools.com/php/php_looping_do_while.asp)
* [PHP for Loop](https://www.w3schools.com/php/php_looping_for.asp)
* [PHP foreach Loop](https://www.w3schools.com/php/php_looping_foreach.asp)
* [Tự học PHP -10. Tìm hiểu về các loại vòng lặp trong PHP](https://youtu.be/dgS3W0AypWk?list=PLq3KxntIWWrLpDmH_9YxuaF_yHA5QKHlN)