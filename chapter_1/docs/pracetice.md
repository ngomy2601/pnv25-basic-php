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
* Create a file named activity2.php
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
* Create a file named activity3.php
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
* Create a file named activity4.php
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
* Create a file named activity5.php
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
* Create a file named activity6.php
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
* Create a file named activity7.php
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

## Activity 8
* Create a file named activity8.php
* Complete the code below by using a FOR loop to display the names of WEP trainers
```php
<?php
    $wep = ["Ronan", "Him", "Rady", "Hyacinthe", "Ratha"];

    // Use a FOR loop to display the names of WEP trainers
 
?>
```
## Activity 9
* Create a file named activity9.php
* Complete the code below by using a FOR EACH loop to display the names of WEP trainers
```php
<?php
    $wep = ["Ronan", "Him", "Rady", "Hyacinthe", "Ratha"];

    // Use a FOR EACH loop to display the names of WEP trainers
 
?>
```
## Activity 10
* Create a file named activity10.php
* Complete the code below by using a WHILE loop to display the numbers until it is a 0 (so display 5, 3, 4 only)
```php
<?php
    $numbers = [5, 3, 4, 0, 5, 1];

    // Use a WHILE loop to display the numbers until it is a 0 (so display 5, 3, 4 only)
 


    
?>
```
## Activity 11
* Create a file named activity11.php
* Complete the code below by using a conditional
```php
<?php

    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
	
	// The money you have
    $money = 5;
	
    // Display 
	// "Error: Your money cannot be negative" if money is negative,
    // or "You have enough money to buy this fruit"
    // or "You need more money to buy this fruit"

?>
```

## Activity 12
* Create a file named activity12.php
* Complete the code below
```php
<?php
    // Complete the function to find max in array of numbers
    function findMax ($array) {
        $maxNumber = 0;

        return $maxNumber;
    }

    // An array of numbers
    $array = [5, 2, 10, 3, 6];

    // Find and display the max in the array
    echo "Max number in array is ";

?>
```