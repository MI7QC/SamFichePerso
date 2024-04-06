<?php
function menu()
{
?>
    <div class='menuDroite'>
        <div class='dropdown'>
            <button id='myBtn1' class='dropbtn'>Personnage</button>
            <div id='myDropdown1' class='dropdown-content'>
                <a href='fichePerso.php'>Fiche Perso</a>
                <a href='inventaire.php'>Inventaire</a>
                <a href='quest.php'>Quest</a>
                <a href='succes.php'>Succès</a>
            </div>
        </div>
    </div>
<?php

}

function head()
{
    $title = getURL($_SERVER['REQUEST_URI']);
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="assets/styles.css">
        <link rel="stylesheet" href="assets/index.css">
    </head>
<?php
}

function getURL($url)
{
    // ce qui il y a dans  -> $url : http://ficheperso/fichePerso.php   cela vient de $_SERVER['REQUEST_URI'];

    // Diviser l'URL en morceaux en utilisant "/"   donc  recupere ce qui suit le /  ici  ficheperso.php
    // note ! quand on explode on divise presentment le contenue en deux elements! donc cela devient un tableau[0] ->http://ficheperso/ tableau[1] -> ficheperso.php
    $urlParts = explode('/', $url);
    //  on recherche dans $urlParts[1]  si il trouve le mot .php  si oui remplacer par vide ''
    $urlParts = str_replace('.php', '', $urlParts[2]);
    return $urlParts;
}
?>