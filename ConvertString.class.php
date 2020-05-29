<?php
class ConvertString {
    public $stringLine = "";
    public $csvLine = array();
    public $csvHandle;
    
    function __construct($line) {
        $this->stringLine = $line;
    }

    function convertToUpperCase() {
        return strtoupper($this->stringLine);
    }

    function convertToAlternateUpperLowerCase() {
        $this->csvLine = array();
        $alternateAlphabetString = array();
        for ($stringIndex = 0; $stringIndex < strlen($this->stringLine); $stringIndex++) {
            if ($stringIndex % 2 === 0) {
                $alternateAlphabetString[] = strtolower($this->stringLine[$stringIndex]);
            } else {
                $alternateAlphabetString[] = strtoupper($this->stringLine[$stringIndex]);
            }
            $this->csvLine[] = strtolower($this->stringLine[$stringIndex]);
        }
        
        return implode($alternateAlphabetString);
    }

    function createCsv() {
        $csvFileName = str_replace(' ', '_', strtolower($this->stringLine)) . ".csv";
        $this->csvHandle = fopen($csvFileName, 'w');
        if ($this->csvHandle) {
            fputcsv($this->csvHandle, $this->csvLine);
            return "CSV created!";
        } else {
            return "CSV file not created!";
        }
        fclose($this->csvHandle);
    }
}
