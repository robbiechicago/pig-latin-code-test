<?php

require 'translator.php';
 
class TranslatorTests extends \PHPUnit\Framework\TestCase
{
    private $pig;
 
    protected function setUp() {
        $this->pig = new Pig();
    }
 
    protected function tearDown() {
        $this->pig = NULL;
    }
 
    public function testNonAlpha() {
        $result = $this->pig->translate('123');
        $this->assertEquals('non-alpha', $result);
    }

    public function testSpace() {
        $result = $this->pig->translate('pig latin');
        $this->assertEquals('space', $result);
    }

    public function testVowel() {
        $result = $this->pig->translate('apple');
        $this->assertEquals('apple-yay', $result);
    }

    public function testQu() {
        $result = $this->pig->translate('question');
        $this->assertEquals('estion-quay', $result);
    }

    public function testConsonant() {
        $result = $this->pig->translate('beast');
        $this->assertEquals('east-bay', $result);
    }    
 
}