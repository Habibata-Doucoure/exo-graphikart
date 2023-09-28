<!-- Demande à l'utilisateur de rentrerune note ou taper fin , chaque note est sauvegardé dans un tableau $notes=[]
à la fin on affiche le tableau de notes sous formes de listes -->


<?php 

$notes = [];
$action = null;

// tant que l'utilisateur ne tape pas fin
while ($action !== 'fin') {
    $action = readline(' Entrez une note ou tapez fin pourterminer la saisie : ');
    // on ajoute la note tapée au tableau notes
    if ($action !== 'fin') {
        $notes[] = (int)$action;
    }
};

    // pour chaque notes dans notes 
    foreach ($notes as $note) {
        // on affiche $note
        echo $note ; 
        // \n représente le saut de ligne
    };

?>