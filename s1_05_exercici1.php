<?php

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
class gos extends animals {
    public function makeSound() {
        return "Bup, bup!";
    }
  
}
  class gat extends animals {
        public function makeSound() {
            return "Meu!";
        }
    }

    $gos = new gos;
    echo $gos->makesound() . "\n";
    $gat = new gat;
    echo $gat->makesound();


?>