<?php
session_start();

    if (!isset($_POST['name']))
        {   $_SESSION['error'] = 1;
            header("Location: Page03.php");
        }else {

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['old'] = $_POST['old'];
        $_SESSION['careers']=$_POST['careers'];
        $_SESSION['career'] = $_POST['career'];
        $_SESSION['age'] = $_POST['age'];

//
        $num = "/^([0-9]+)$/";
        $word = "/^[a-zA-Z_\x{4e00}-\x{9fff}]+$/u";
        $word1 = "/^[a-zA-Z_\x{4e00}-\x{9fff}]+$/u";

//        echo strlen($_SESSION['name'])."<br>";
//
//        echo preg_match($word, $_SESSION['name'])."<br>";
//
//        echo strlen($_SESSION['old'])."<br>";
//
//        echo preg_match($num, $_SESSION['old'])."<br>";


//        var_dump(preg_match($pre, "你1805adgnjk好")); // 等於1
//        var_dump(preg_match($pre, "你1805adgn^&#jk好")); // 等於0
//
        if (strlen($_SESSION['name']) == 0){
            $_SESSION['error'] = 2;
            header("Location: Page03.php");
        }else if(preg_match($word, $_SESSION['name']) != 1){
            $_SESSION['error'] = 3;
            header("Location: Page03.php");
        }else if(!isset($_POST['gender'])){
            $_SESSION['error'] = 6;
            header("Location: Page03.php");
        }else if(strlen($_SESSION['old']) == 0){
            $_SESSION['error'] = 4;
            header("Location: Page03.php");
        }else if(preg_match($num, $_SESSION['old']) != 1) {
            $_SESSION['error'] = 5;
            header("Location: Page03.php");
        }else if($_SESSION['old'] < 12) {
            $_SESSION['error'] = 9;
            header("Location: Page03.php");
        }else if($_SESSION['old'] > 80) {
            $_SESSION['error'] = 10;
            header("Location: Page03.php");
        }else if(strlen($_POST['careers']) == 0 ||
            preg_match($word1, $_SESSION['careers']) != 1){
            $_SESSION['error'] = 11;
            header("Location: Page03.php");
        }else if(!isset($_POST['career'])){
            $_SESSION['error'] = 7;
            header("Location: Page03.php");
        }else if(!isset($_POST['age'])){
            $_SESSION['error'] = 8;
            header("Location: Page03.php");
        }else{header("Location: Page04.php");}
    }
