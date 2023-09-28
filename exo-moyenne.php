<!-- Trouver la moyenne de nombre dans un tableau  -->

<?php 

$notes = [15 , 16 , 9]; 
// la fonction array_sum() permet d'additionner les élements d'un tableau
// la fonction count() permet de compter les éléments d'un tableau
$moyenne = array_sum($notes) /count($notes); 
$moyenne = round(array_sum($notes) /count($notes)); 

// round() permet d'arrondir le nombre afin qu'il soit entier . Sans le round on a un nombre à virgule

echo "Vous avez ". ($moyenne). " de moyenne";

?>