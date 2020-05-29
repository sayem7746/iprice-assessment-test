# iprice assessment

## Problem

Using object-oriented concepts, create a CLI tool that accepts a string and does the following to it:
-	converts the string to uppercase and outputs it to stdout.
-	converts the string to alternate upper and lower case and outputs it to stdout.
-	creates a CSV file from the string by making each character a column in the CSV and then output "CSV created!" to stdout.

Make sure the code unit-testable and extendable. We would like to see a piece of code as you would do on your daily task

### Sample Input
```
hello world
```
### Sample Output
```
HELLO WORLD
hElLo wOrLd
CSV created!
```

### Note: 
a CSV file is created on the root directory which containing the following: 
```
h,e,l,l,o, ,w,o,r,l,d
```

## Installation
Run following command to install dependencies
```
composer install
```

## Input file
Please add input string to the following file in root directory
```
input.txt
```
If you want to have multiple input string to test, then keep each string in seperate line.


## Execute script from CLI
Run following command from terminal
```
php index.php
```

## Unit Tests
Run following command from terminal
```
phpunit
```