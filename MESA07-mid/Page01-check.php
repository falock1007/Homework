<?php
session_start();

if (!isset($_POST['Player'])){
    header("Location: Page01.php");
}else {
        $Player = $_POST['Player'];
        $pre = "/^[0-9a-zA-Z_\x{4e00}-\x{9fff}]+$/u";
        var_dump(preg_match($pre, "你1805adgnjk好")); //
        var_dump(preg_match($pre, "你1805adgn^&#jk好")); // 等於0


        if (strlen($Player) != 0 && preg_match($pre, $Player) == 1) {
            $_SESSION['Player'] = $Player;
            header("Location: Page02.php");
        } else {
            header("Location: Page01.php");
        }
    }
