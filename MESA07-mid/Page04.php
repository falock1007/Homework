<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="JS/bootstrap.min.css" rel="stylesheet">
    <?php session_start(); ?>
    <style type="text/css">

        body { /*背景圖*/
            margin: 0;
            padding: 0;
            background: url(images/Free-Download-Cthulhu-Picture.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        form div {
            text-shadow: 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000;

        }

        .box {
            position: fixed;
            top: -1000px;
            left: 30%;
            width: 500px;
            background-color: #fff;
            color: #7F7F7F;
            padding: 20px;
            border: 2px solid #ccc;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
            -khtml-border-radius: 20px;
            -moz-box-shadow: 0 1px 5px #333;
            -webkit-box-shadow: 0 1px 5px #333;
            z-index: 101;
            -webkit-transition: all 0s ease-out;
            -ms-transition: all 0s ease-out;
            transition: all 0s ease-out;
            font: bold 20px 微軟正黑體;
            text-shadow: 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000;
            border-radius: 10px;
        }

        .box h2 {
            border-bottom: 1px dashed #7F7F7F;
            margin: -20px -20px 0px -20px;
            padding: 10px;
            background-color: #FFEFEF;
            color: #EF7777;
            -moz-border-radius: 20px 20px 0px 0px;
            -webkit-border-top-left-radius: 20px;
            -webkit-border-top-right-radius: 20px;
            -khtml-border-top-left-radius: 20px;
            -khtml-border-top-right-radius: 20px;

        }

        .col-sm-2 {
            font: bold 24px 微軟正黑體;
            text-align: center;
            size: 10px;
        }

        .row a.<?php
        $x = $_SESSION['career'];
        $y = array("astr","acon","adex","aapp","aint","aedu");
        echo $y[$x];
        ?> {
            color: red;
        }

        input[type=button] {
            draggable: true;
        }


    </style>


</head>


<body>
<p id="title" align="center" style="font: bold 60px 微軟正黑體; color: #7f00ff;">
    <?php
    if ($_SESSION["Player"]) {
        echo "{$_SESSION["Player"]}的角色卡 - 步驟三";
    } else {
        header("Location: Page01.php");
    }
    ?>
    <br>
    <input type="button" onclick="doAnimateShow()" value="解說"
           style="font: 36px 微軟正黑體; border-radius: 10px;">
    <script>
        function doAnimateShow() {
            document.getElementById("box").style.top = "100px";
        }
    </script>

<div class="box" id="box">
    <h2>角色？玩家？</h2>

</div>

<script>
    function doAnimateHide() {
        document.getElementById("box").style.top = "-1000px";
        event.cancelBubble = true;
    }

    document.getElementById("box").onclick = doAnimateHide;


    }
</script>

</p>

<form action="Page04-check.php" method="post">
    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"><a class="astr">力量STR</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="istr"></div>
            <div class="col-sm-2"><a class="acon">體質CON</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="icon"></div>
            <div class="col-sm-2"><a class="adex">敏捷DEX</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="idex"></div>
            <div class="col-sm-2"><a class="aapp">外貌APP</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="iapp"></div>
            <div class="col-sm-2"><a class="apow">意志POW</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="ipow"></div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <div class="row">
            <input type="button" id="<?php echo $_SESSION['dice0101'] ?>"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0101'] ?>"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0102'] ?>"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0103'] ?>"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0104'] ?>"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0105'] ?>"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0106'] ?>"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0107'] ?>"/>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2"><a class="aint">智力INT</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="iint"></div>
            <div class="col-sm-2"><a class="asize">體型SIZE</a><br><input type="text"
                                                                        style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                        size="10px" name="isize">
            </div>
            <div class="col-sm-2"><a class="aedu">教育EDU</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="iedu"></div>
            <div class="col-sm-3"></div>
        </div>
        <br>
        <div class="row">
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0201'] ?>"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0202'] ?>"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0203'] ?>"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0204'] ?>"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0205'] ?>"/>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2"><a class="aluck">幸運LUCK</a><br><input type="text"
                                                                        style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                        size="10px" name="iluck"></div>
            <div class="col-sm-5"></div>
        </div>
        <br>
        <div class="row">
            <input type="button" style="background-color:#006312;border-radius:10px; text-align:center;
        font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0301'] ?>"/>
            <input type="button" style="background-color:#006312;border-radius:10px; text-align:center;
        font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0302'] ?>"/>
        </div>
        <br>
        <div style="font-size:16px; font-weight:bold; border-radius: 5px;color: black">
            <input type="button" onclick="javascript:location.href='Page03.php'" value="上一頁">
            <input type="submit" value="下一頁">
        </div>



</form>
</body>