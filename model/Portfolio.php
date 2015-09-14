<?php
/**
 * @return array
 */
function allArtwork(){
    $portfolio  = array();

    $portfolio[1] = array(
        'titre' 		=> 'Tableau le chiffre 1',
        'image' 		=> 'numbers-01.jpg',
        'description' 	=> 'Expérimentation de couleurs'
    );

    $portfolio[2] = array(
        'titre' 		=> 'Tableau le chiffre 2',
        'image' 		=> 'numbers-02.jpg',
        'description' 	=> 'Jeu de fondus'
    );

    $portfolio[3] = array(
        'titre' 		=> 'Tableau le chiffre 6',
        'image' 		=> 'numbers-06.jpg',
        'description' 	=> '80\'s style'
    );

    $portfolio[4] = array(
        'titre' 		=> 'Tableau le chiffre 9',
        'image' 		=> 'numbers-09.jpg',
        'description' 	=> 'Travail avec les pinceaux'
    );

    $portfolio[5] = array(
        'titre' 		=> 'Tableau le numéro 12',
        'image' 		=> 'numbers-12.jpg',
        'description' 	=> 'Répétition de formes'
    );
}