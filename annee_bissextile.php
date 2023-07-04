<?php
//********************************
// L'année est-elle bissextile ?
//********************************

// Écrivez un programme qui demande une année à l'utilisateur.
// Dite ensuite à l'utilisateur si cette année est bissextile ou pas.

// L’année est une année bissextile (elle compte 366 jours).
// L’année n’est pas une année bissextile (elle compte 365 jours).


$a = readline("Choissiez une année : ");

// Demande à l'utilisateur de saisir une année et stocke la valeur dans la variable $a.

if ($a%4 == 0 && $a%100 > 0 || $a%400 == 0) {
    // Vérifie si l'année saisie est divisible par 4 et non divisible par 100,
    // ou si elle est divisible par 400. C'est la condition pour être une année bissextile.

    echo "$a est bissextile.";
    // Affiche un message indiquant que l'année saisie est bissextile.
} else {
    echo "$a n'est pas bissextile.";
    // Affiche un message indiquant que l'année saisie n'est pas bissextile.
}
