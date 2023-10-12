# PRACTICE

## Activity 1
* Create a file named activity1.php
* Write a code snippet similar to the one below

```php

<?php
    // Just try to execute this file !
    echo "You can now execute PHP programs from a file !";

$numbers = [1, 2, 3, 4];

for ($i=0; $i < count($numbers); $i++) { 
    echo $numbers[$i];
}

$i = 0;
while ($i < count($numbers)) {
    echo $numbers[$i];
    $i++;
}
?>

```
* Execute this file

## Activity 2
* Create a file named activity1.php
* Write a code snippet similar to the one below
```php

<?php
    // Instructions: execute this file and read the error message. Then correct the error.
    $number1 = 5
    echo $number1;
?>

```
* Execute this file and read the error message. Then correct the error.

## Activity 3
* Create a file named activity1.php
* Write a code snippet similar to the one below
```php

<?php
    // Instructions: execute this file and read the error message. Then correct the error.
    myText = "Hello !";
    echo myText;
?>

```
* Execute this file and read the error message. Then correct the error.

## Activity 4
* Create a file named activity1.php
* Write a code snippet similar to the one below
```php
<?php
    // What is the difference between the operator '+' and the operator '.' ?
    // Read the error message and Correct the error in this program
    $number1 = "5ronan";
    $number2 = 2;
    echo  $number1 . $number2;
?>
```
* Execute this file and read the error message. Then correct the error.

## Activity 5
* Create a file named activity1.php
* Write a code snippet similar to the one below
```php
<?php
    $wep = ["Ronan", "Him", "Rady", "Hyacinthe"];

    // Add "Ratha" in the list of WEP trainers
    print_r($wep);
 
?>
```
* Add "Ratha" in the list of WEP trainers

## Activity 6
* Create a file named activity1.php
* Write a code snippet similar to the one below
```php
<?php

	// This associative array stores information about a fruit
    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
	
	// TODO  : print the information about this fruit as follows:
    $output = "<quantity> <name> from <country> cost <price>$";   //  You need to change this line  !
	
    echo $output;
?>
```
* Modify the program to display the information of the fruit as follows
> 15 mango from Cambodia cost 10$

## Activity 7
* Create a file named activity1.php
* Write a code snippet similar to the one below
```php
<?php
    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
    // You have a discount, change the price to 8$

    $output = "<quantity> <name> from <country> cost <price>$";   // Change this line to dislay the data about the fruit !
    echo $output;
?>
```
* Modify the program to display the information of the fruit as follows
> 15 mango from Cambodia cost 8$