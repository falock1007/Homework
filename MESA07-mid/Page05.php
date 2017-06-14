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

        .col-sm-2{
            font: bold 24px 微軟正黑體;
            text-align: center;
            size: 10px;
        }



    </style>


</head>


<body>
<p id="title" align="center" style="font: bold 60px 微軟正黑體; color: #7f00ff;">
    <?php
    if ($_SESSION["Player"]) {
        echo "{$_SESSION["Player"]}的角色卡 - 步驟四";
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
    <h2></h2>
</div>

<script>
    function doAnimateHide() {
        document.getElementById("box").style.top = "-1000px";
        event.cancelBubble = true;
    }

    document.getElementById("box").onclick = doAnimateHide;
</script>

<form style="text-align: center; font: bold 22px 微軟正黑體; color: yellow"
      action="Page05-check.php" method="post">

    <div><a>出生地：</a><input type="text" name="born" size="10px"
            style="color: black; border-radius: 10px"></div>
    <br>
    <div><a>居住地：</a><input type="text" name="live" size="10px"
                           style="color: black; border-radius: 10px"></div>
    <br>
    <div><a>母語：</a><input type="text" name="language" size="10px"
                           style="color: black; border-radius: 10px"></div><br>


<!--    <div><a>年齡補正：</a><input type="text" name="" size="10px"-->
<!--                           style="color: black; border-radius: 10px"></div><br>-->
<!---->
<!--    <div><a>體型：</a><input type="text" name="body" size="10px"-->
<!--                           style="color: black; border-radius: 10px"></div><br>-->

    <div><a>性格：</a><br>
    <textarea></textarea></div><br>
    <div></div><a>背景：</a><br>
    <textarea></textarea></div><br>
    <div style="font-size:16px; font-weight:bold; border-radius: 5px;color: black">
        <input type="button" onclick="javascript:location.href='Page03.php'" value="上一頁">
        <input type="submit" value="下一頁">
    </div>
</form>