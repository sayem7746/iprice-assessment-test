<?php
require_once('ConvertString.class.php');

// Input strings gether from file.
$handle = fopen("input.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $inputString = trim($line);
        $convertInputString = new ConvertString($inputString);
        echo $convertInputString->convertToUpperCase() . PHP_EOL;
        echo $convertInputString->convertToAlternateUpperLowerCase() . PHP_EOL;
        echo $convertInputString->createCsv() . PHP_EOL;
    }
} else {
    echo "Error opening the input file.";
} 

fclose($handle);
?>