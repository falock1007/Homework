<?php
session_start();

$_SESSION['born'] = $_POST['born'];
$_SESSION['live'] = $_POST['live'];
$_SESSION['language'] = $_POST['language'];
$_SESSION['posture'] = $_POST['posture'];
$_SESSION['personality'] = $_POST['personality'];
$_SESSION['background'] = $_POST['background'];


header("Location:Page06.php");