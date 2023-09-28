<?php 
// Ecrire un code qui me permet de voir si la fonction que j'ai écrite est un palyndrome : mot qui se lit de la même
// manière à l'envers.


$mot = strtolower(readline('Entrez un mot '));
$reverse = strrev($mot);
// strtolower permet de convertir un mot en string pour que même s'il y est une majuscule, il fasse le matching

if($mot === $reverse) {
    echo "C'est un palyndrome";
} else {
    echo " Ce n'est pas un palyndrome";
}
?>