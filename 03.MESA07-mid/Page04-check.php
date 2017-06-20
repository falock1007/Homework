<?php
session_start();
echo $_POST['istr'];




if ($_POST['istr'] < 3 || $_POST['icon'] < 3 || $_POST['idex'] < 3 || $_POST['iapp'] < 3 || $_POST['ipow'] < 3
    || $_POST['iint'] < 8 || $_POST['isize'] < 8 || $_POST['iedu'] < 8 || $_POST['iluck'] < 3 ){
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
    $num = "/^([0-9]+)$/";

    $a = 0;
    $b = 0;

    echo strlen($x[2]);
    echo preg_match($num, $x[2]);


    for ($j = 5; $j <= 7; $j++) {
        if (strlen($x[$j]) == 0 || preg_match($num, $x[$j]) != 1 || $x[$j] < 8) {

            header("Location:Page04.php");
            break;
        }

    }

    for ($i = 0; $i <= 9; $i++) {

        if (strlen($x[$i]) == 0 || preg_match($num, $x[$i]) != 1 || $x[$i] < 3 || $x[$i] > 18) {
            if ($i == 9) {
                header("Location:Page05.php");
            } else {
                header("Location:Page04.php");
                break;
            }
        }
    }



}