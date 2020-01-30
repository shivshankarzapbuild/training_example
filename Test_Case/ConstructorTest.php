<?php
use PHPUnit\Framework\TestCase;

    class SampleTest extends TestCase{

       public function testReturnName(){
           
            require "../OOPs_Concept/constructor.php";

           $test = new Test2("shiv",2020);
           $this->assertEquals("shiv",$test->getName());

       }
       public function testReturnBatch(){

        $test = new Test2("shivshankar",2021);
        $this->assertEquals(2021,$test->getBatch());
       }

       
    }
?>