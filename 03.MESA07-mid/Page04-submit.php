<?php
session_start();

if (!isset($_POST['count'])){
    echo 'xx';
}else {

    $_SESSION['count'] = $_POST['count'];
    $_SESSION['redbtn01'] = $_POST['redbtn01'];



    $a1=[];
    $a2=
    array_splice($a1,$_SESSION['count'],0,$a2);

    $_SESSION['count']++;
    header("Location: Page04.php");
}