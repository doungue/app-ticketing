<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: action/login.php');
}