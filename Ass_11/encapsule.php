<?php
class Fruit {
    private $name;

   
    public function setName($name) {
        $this->name = $name;
    }

    
    public function getName() {
        return $this->name;
    }
}

// Create object and use the functions
$fruit = new Fruit();
$fruit->setName("Mango");
echo "Fruit: " . $fruit->getName();
?>
