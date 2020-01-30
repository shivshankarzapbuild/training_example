<?php

    use PHPUnit\Framework\TestCase;

    class ConstructorNewTestCase extends TestCase{

        public function testGetNameReturnName(){
            
            require "../OOPs_Concept/ConstructorWithTest.php";

            $test = new ConstructorExample();
            
            $this->assertEquals($test->getName(""),"");

        }

        public function testSetNameReturnName(){

            $test = new ConstructorExample();
            $this->assertEquals("",$test->setName());
        }
       
    }

?>