<?php
use PHPUnit\Framework\TestCase;


class ConvertStringTest extends TestCase {
	public function testConvertStringToUpperCase() {
		require 'ConvertString.class.php';
		$convertInputString = new ConvertString("Hello world");
		$stringToUpperCase = $convertInputString->convertToUpperCase();
		$this->assertSame("HELLO WORLD", $stringToUpperCase);
	}
	
	public function testConvertToAlternateUpperLowerCase() {
		$convertInputString = new ConvertString("Hello world");
		$stringAlternateCases = $convertInputString->convertToAlternateUpperLowerCase();
		$this->assertSame("hElLo wOrLd", $stringAlternateCases);
	}

	public function testCreateCsv() {
		$convertInputString = new ConvertString("Hello world");
		$createSuccess = $convertInputString->createCsv();
		$this->assertSame("CSV created!", $createSuccess);
	}
}
