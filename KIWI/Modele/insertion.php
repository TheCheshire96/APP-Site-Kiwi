<?php
require ('connexion.php');

$id_piece=$_POST['id_piece'];
$choix_piece=$_POST['choix_piece'];
$type=$_POST['type'];
$superficie=$_POST['superficie'];
$nb_capteur=$_POST['nb_capteur'];
$id_maison=$_POST['id_maison'];


function insertion_piece($db){
    $db->prepare('INSERT INTO piece(id_piece, choix_piece, type, $superficie, nb_capteurs, id_maison ) VALUES(id_piece, choix_piece, type, superficie, nb_capteurs, id_maison)');
}