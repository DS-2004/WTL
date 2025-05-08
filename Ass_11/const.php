<?php


  

    class Constr_name {
        public $name;

        
    //    function __construct(){
    //     echo "Hello World";
    //    } 

    
        // Correct constructor
        function __construct($name) {
            $this->name = $name; // Assign to the class property
        }
    
        function display() {
            echo $this->name; // Use the class property
        }
    }
    
    $ob = new Constr_name("Diksha");
    $ob->display(); // Output: Diksha
    
    ?>
    
    
    
   