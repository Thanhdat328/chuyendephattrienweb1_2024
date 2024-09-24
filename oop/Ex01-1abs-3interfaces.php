<?php

// Example 01 in OOP_Diagram.drawio
 include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');
// Single Abstract, Many Interfaces
class Ex01 extends Abstract1 implements Interface1, Interface2, Interface3 {   
    
   public function func_from_Ab1_no_body(){
        echo 'Abstract 01 no body from Ex01 ne cac ban ';
    }
    
    public function func_from_Int1(){

    }

   public function func_from_Int2(){
        
    }

    public function func_from_Int3(){
        
    }
}


$ex = new Ex01();
$ex->func_from_Ab1_no_body();
$ex->func_from_Int1();
$ex->func_from_Int2();
$ex->func_from_Int3();
   


// public function func_from_Abs1(){
    //     echo 'b';
    // }
    
    // public function func_from_Abs2(){
    //     echo 'Abstract 02';
    // }
    
    // public function func_from_Abs3(){
    //     echo 'Abstract 03';
    // }
