<?php

use PHPUnit\Framework\TestCase;
  class CalculatorTestCase extends TestCase{
      
        public function testAdd(){
            
            require "../Calculator/Calculator.php";

            $cls = new Calculator(5,10);

            $this->assertEquals(15,$cls->add());

        }
        public function testSubtract(){

            $cls = new Calculator(10,5);

            $this->assertEquals(5,$cls->subtract());
        }

        public function testMultiply(){
            $cls = new Calculator(15,12);

            $this->assertEquals(180,$cls->multiply());
           // $this->assertTrue(1,$cls->multiply());
        }
        public function testDivide(){
            $cals = new Calculator(90,45);

            $this->assertEquals(2,$cals->divide());

        }
  }
?>