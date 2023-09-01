<?php

//Vérifier si l'utilisateur est authentifié au niveau du site
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../login.php');
}

require('../database.php');
 
// AMBIL DATA ID DI URL
$id = $_GET['id'];

// AMBIL NAMA FILE FOTO SEBELUMNYA
$data = $bdd->prepare("SELECT demande FROM demande WHERE id=?");
$data->execute(array($id));

// DELETE DATA DARI TABLE
$result =$bdd->prepare("DELETE FROM demande WHERE id= ?");
$result->execute(array($id));
// REDIRECT KE index.php
header("Location:Service.php");
