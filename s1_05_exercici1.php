<?php
include ('gos.php');
include ('gat.php');
abstract class animals
{
    protected $nom;

    public function animalNoms($nom)
    {
        $this->nom = $nom;
    }
    public function makeSound()
    {
        return "";
    }

}


$gos = new gos;
echo $gos->makesound() . "\n";
$gat = new gat;
echo $gat->makesound();


?>