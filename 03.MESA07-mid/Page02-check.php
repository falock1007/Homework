<?php
session_start();

if (!isset($_POST['dice0101']) || !isset($_POST['dice0201']) || !isset($_POST['dice0301']))
{header("Location: Page02.php");
}else{

    $_SESSION['dice0101'] = $_POST['dice0101'];
    $_SESSION['dice0102'] = $_POST['dice0102'];
    $_SESSION['dice0103'] = $_POST['dice0103'];
    $_SESSION['dice0104'] = $_POST['dice0104'];
    $_SESSION['dice0105'] = $_POST['dice0105'];
    $_SESSION['dice0106'] = $_POST['dice0106'];
    $_SESSION['dice0107'] = $_POST['dice0107'];

    $_SESSION['dice0201'] = $_POST['dice0201'];
    $_SESSION['dice0202'] = $_POST['dice0202'];
    $_SESSION['dice0203'] = $_POST['dice0203'];
    $_SESSION['dice0204'] = $_POST['dice0204'];
    $_SESSION['dice0205'] = $_POST['dice0205'];

    $_SESSION['dice0301'] = $_POST['dice0301'];
    $_SESSION['dice0302'] = $_POST['dice0302'];

    header("Location: Page03.php");

}


