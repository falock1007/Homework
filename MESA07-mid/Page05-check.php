<?php
session_start();

$_SESSION['born'] = $_POST['born'];
$_SESSION['live'] = $_POST['live'];
$_SESSION['language'] = $_POST['language'];



header("Location:Page06.php");