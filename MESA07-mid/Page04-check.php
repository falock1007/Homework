<?php
session_start();

if (!isset($_POST['istr'])){
 header("Location: Page04.php");
 }else {
    $_SESSION['istr'] = $_POST['istr'];
    $_SESSION['icon'] = $_POST['icon'];
    $_SESSION['idex'] = $_POST['idex'];
    $_SESSION['iapp'] = $_POST['iapp'];
    $_SESSION['ipow'] = $_POST['ipow'];

    $_SESSION['iint'] = $_POST['iint'];
    $_SESSION['isize'] = $_POST['isize'];
    $_SESSION['iedu'] = $_POST['iedu'];

    $_SESSION['iluck'] = $_POST['iluck'];

    $x = array($_SESSION['istr'], $_SESSION['icon'], $_SESSION['idex'], $_SESSION['iapp'],
        $_SESSION['ipow'], $_SESSION['iint'], $_SESSION['isize'], $_SESSION['iedu'],
        $_SESSION['iluck']);

//    echo $x[0];


    $num = "/^([0-9]+)$/";

    for ($j = 5; $j <= 7; $j++) {

        if (strlen($x[$j]) == 0 || preg_match($num, $x[$j]) != 1 || $x[$j] < 8) {

            header("Location:Page04.php");
        }
    }


    for ($i = 0; $i < 9; $i++) {
        if (strlen($x[$i]) == 0 || preg_match($num, $x[$i]) != 1 || $x[$i] < 3 || $x[$i] > 18) {
            header("Location:Page04.php");
        }
        if($i==8){
            header("Location:Page05.php");
        }
    }

}