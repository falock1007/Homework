<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="JS/bootstrap.min.css" rel="stylesheet">
    <?php session_start(); ?>
    <style>
        body{ /*背景圖*/
            margin:0;
            padding:0;
            background: url(images/Free-Download-Cthulhu-Picture.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #image{ border:0px solid; text-align: center; margin-bottom: 20px}
        #image img{height:350px}

        form {
            text-align: center;
            font: bold 24px 微軟正黑體;
        }

        div {
            font: bold 24px 微軟正黑體;
            color: yellow;
            text-shadow: 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000, 0px 0px 10px #000;


            border-radius: 10px;
        }

        #click01, #click02, #click03 {
            color: #000;
            border-radius: 10px;
            font: bold 20px 微軟正黑體;
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


        form input#submit {
            margin:10px;
        }


    </style>

    <script>
        var xmlhttp;
        if (window.XMLHttpRequest) {
            // code for modern browsers
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for old IE browsers
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        function diceNo1() {
            //var here = document.getElementById('here');
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
//                document.getElementById("here").innerHTML =
//                    this.responseText;
                    document.getElementById("here").innerHTML =
                        this.responseText;
                }
            };
            xmlhttp.open("GET", "Page02-DICE01.php", true);
            xmlhttp.send();
        }

        function diceNo2() {
            //var here = document.getElementById('here');
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
//                document.getElementById("here").innerHTML =
//                    this.responseText;
                    document.getElementById("here2").innerHTML =
                        this.responseText;
                }
            };
            xmlhttp.open("GET", "Page02-DICE02.php", true);
            xmlhttp.send();
        }

        function diceNo3() {
            //var here = document.getElementById('here');
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
//                document.getElementById("here").innerHTML =
//                    this.responseText;
                    document.getElementById("here3").innerHTML =
                        this.responseText;
                }
            };
            xmlhttp.open("GET", "Page02-DICE03.php", true);
            xmlhttp.send();
        }
    </script>


</head>

<body>
<p id="title" align="center" style="font: bold 60px 微軟正黑體; color: #7f00ff;">
    <?php
    if($_SESSION["Player"]){
    echo "{$_SESSION["Player"]}的角色卡 - 步驟二<br>";
    }else{
        header("Location: Page01.php"); }
    ?>
</p>

<div id="image" onclick="doAnimateShow()">

<img src="images/DICE.JPG">
    <p style="color: #FFFFFF; font: bold 18px 微軟正黑體">套骰照片</p>
</div>

<script>
    function doAnimateShow() {
        document.getElementById("box").style.top = "100px";
    }
</script>

<div class="box" id="box">
    <a class="boxclose" id="boxclose"></a>
    <h2>什麼是D6？</h2>
    <ul>
        <li>D6就是一般常見的「六面骰」</li>
        <li>TRPG使用的套骰通常為D4、D6、D8、D10、D12、D20<br>
            以及兩個D10所構成的百面骰</li>
        <li>照片上的7顆骰子就是套骰<br>
            便宜的套骰大概150元，而貴的甚至有到好幾萬</li>
        <li>COC系統中，創角基本上只會用到六面骰(D6)<br>
            而遊戲中最常用到的則是百面骰(D100)</li>
    </ul>


</div>


<script>
    function doAnimateHide() {
        document.getElementById("box").style.top = "-1000px";
        event.cancelBubble = true;
    }

    document.getElementById("box").onclick = doAnimateHide;
</script>



<form action="Page02-check.php" method="post">

    <div id="dice01">3d6擲7次
        <input id="click01" type="button" value="擲骰子" style="margin-bottom: 5px;"
               onclick="diceNo1();this.disabled='disabled'" ></div>

    <div id="here"><p style="font-size:19.5px;opacity: 0;">3d6骰7次</p></div>


    <div id="dice02">2d6+6擲5次
        <input id="click02" type="button" value="擲骰子" style="margin-bottom: 5px;"
               onclick="diceNo2();this.disabled='disabled'"></div>

    <div id="here2"><p style="font-size:19.5px;opacity: 0;">2d6+6骰5次</p></div>



    <div id="dice03">3d6擲2次
        <input id="click03" type="button" value="擲骰子" style="margin-bottom: 5px;"
               onclick="diceNo3();this.disabled='disabled'"></div>

    <div id="here3"><p style="font-size:19.5px;opacity: 0;">3d6骰2次</p></div>


    <input id="submit" type="submit" value="下一頁" style="font-size:16px; font-weight:bold;
            border-radius: 5px;">


</form>
</body>
</html>