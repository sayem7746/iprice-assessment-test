composer require --dev phpunit/phpunit

# iprice assessment

One Paragraph of project description goes here

## Problem

Using object-oriented concepts, create a CLI tool that accepts a string and does the following to it:
-	converts the string to uppercase and outputs it to stdout.
-	converts the string to alternate upper and lower case and outputs it to stdout.
-	creates a CSV file from the string by making each character a column in the CSV and then output "CSV created!" to stdout.

Make sure the code unit-testable and extendable. We would like to see a piece of code as you would do on your daily task

### Sample Input
hello world

### Sample Output
HELLO WORLD
hElLo wOrLd
CSV created!

### Note: 
a CSV file is created on the root directory which containing the following: 
h,e,l,l,o, ,w,o,r,l,d
