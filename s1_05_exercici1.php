<?php
include ('gos.php');
include ('gat.php');



$gos = new gos ("Bobby");
echo $gos->makesound() . "\n";
$gat = new gat("Misifu");
echo $gat->makesound();


?>