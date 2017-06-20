<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/boxstylesheet.css" rel="stylesheet">
    <link href="CSS/title.css" rel="stylesheet">
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
        #image img{height:300px}

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





        form input#submit {
            margin:10px;
        }

        #box {
            width:500px;
            margin-left: -250px;
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
<p id="title1">
    <?php
    if($_SESSION["Player"]){
    echo "{$_SESSION["Player"]}的角色卡";
    }else{
        header("Location: Page01.php"); }
    ?>
</p>
<p id="title2">
    步驟一：擲骰子
</p>

<div id="image" onclick="doAnimateShow()">

<img src="images/DICE.JPG">
    <p style="color: #FFFFFF; font: bold 1.5rem 微軟正黑體">套骰照片</p>
</div>

<script>
    function doAnimateShow() {
        document.getElementById("box").style.top = "13%";
    }
</script>

<div class="box" id="box">
    <a class="boxclose" id="boxclose"></a>
    <h2>擲什麼樣的骰子？</h2>
    <ul>
        <li>一般提到「骰子」<br>
            想必立刻想到的是六個面的立方體骰子吧？</li>
        <li>但TRPG中使用的骰子可能就不只如此<br>
            一般在販賣時以七個一組稱為套骰</li>
        <li>照片上的七顆骰子就是套骰<br>
            便宜的套骰大概150元，而貴的甚至有到好幾萬</li>
    </ul>

    <h2>什麼是3d6？2d6+6？</h2>
    <ul>
        <li>D是DICE的意思，因此D6就是指6面骰</li>
        <li>上頭提到的套骰通常包括<br>
            D4 D6 D8 D10 D12 D20<br>
            最後一顆也是D10，但是上面寫的都是10位數<br>
            10位數的D10和個位數的D10便能夠成百面骰
        </li>
        <li>因此2d6+6就是2個六面骰加上6點得到的數字<br>
            複雜一點：1d10+2d6+3d4+3<br>
            就是一個十面骰+兩個六面骰+三個四面骰+3點</li>
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