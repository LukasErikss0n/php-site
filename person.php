<?php
echo "connectet succesfully";
echo "<br>";
class Person{
    public $name;
    public $eyeColor;
    public $age;

    //metodes
    function setName($name){
        $this->name = $name;

    }
    function setEyeColor($eyeColor){
        $this->eyeColor = $eyeColor;
    }

    function getName(){
        return $this-> name;
    }

    function getEyeColor(){
        return $this-> eyeColor;
    }

}

$carrecter = new person();
$carrecter->setName("Lukas");
$carrecter->setEyeColor("blåa");

echo "Mitt namn är " . $carrecter->getName(); 
echo " och jag har ".$carrecter->getEyeColor() ." ögon";

?>