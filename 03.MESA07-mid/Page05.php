<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/boxstylesheet.css" rel="stylesheet">
    <link href="CSS/boxstylesheet02.css" rel="stylesheet">
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

        #submit {
            margin:10px;
        }

        #box {
            width:500px;
            margin-left: -250px;
        }


        textarea{
            font-size: 1.5rem;
            color: black;!important;
            border-radius: 1rem;
        }


    </style>

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
    步驟四：欲創建角色的詳細介紹<br>
    <input type="button" onclick="doAnimateShow()" value="解說" style="border-radius: 10px;">
    <script>
        function doAnimateShow() {
            document.getElementById("box").style.top = "100px";
        }
    </script>

<div class="box" id="box">
    <h2>本頁可不填</h2>
    <ol>
        <li>出生地、居住地、母語等等...：<br>
            有時候也會根據主持人劇本的發生場所而決定<br>
        </li>
        <li>體態：<br>
            根據STR與SIZE決定體態<br>
            如體型SIZE高卻力量STR低，代表非常的胖</li>
        <li>性格：<br>
            角色個性是暴躁？冷靜？善良？還是冷漠等等...</li>
        <li>生活背景：<br>
            角色的人生中有什麼特別的經歷</li>
    </ol>
</div>

<script>
    function doAnimateHide() {
        document.getElementById("box").style.top = "-1000px";
        event.cancelBubble = true;
    }

    document.getElementById("box").onclick = doAnimateHide;
</script>

</p>

<form id="usrform" style="text-align: center; font: bold 22px 微軟正黑體;"
      action="Page05-check.php" method="post">
    <div class="container">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">

    <a>出生地：</a><input type="text" name="born" size="8px"
                            style="color: black; border-radius: 10px" />&ensp;
    <a>居住地：</a><input type="text" name="live" size="8px"
                           style="color: black; border-radius: 10px" />&ensp;
    <a>母語：</a><input type="text" name="language" size="8px"
                           style="color: black; border-radius: 10px"></div>
    <div class="col-sm-2"></div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-sm-12"><a onclick="doAnimateShow02()">體態：</a>
            <a onclick="doAnimateShow02()" style="color: yellow">(STR：<?php echo $_SESSION['istr']?>、SIZE：<?php echo $_SESSION['isize']?>)</a><br>

            <script>
                function doAnimateShow02() {
                    document.getElementById("box02").style.top = "100px";
                }
            </script>

            <div class="box" id="box02">
                        <h2>力量STR</h2>
                        <a style="color: #7f00ff"><?php echo "力量STR所填入的數值-[{$_SESSION['istr']}]"?></a>
                        <ul style="text-align: left">
                            <li>0：衰弱；沒法站起來甚至端起一杯茶</li>
                            <li>3：弱者，虛弱</li>
                            <li>10：普通人水準</li>
                            <li>18：你見過的力氣最大的人</li>
                            <li>20：世界水準 (奧賽舉重冠軍) ◆人類極限</li>
                            <li>28：超越人類之力 (例如大猩猩或馬)</li>
                            <li>40+：怪物之力</li>
                        </ul>
                        <h2>體型SIZE</h2>
                <a style="color: #7f00ff"><?php echo "體型SIZE所拖曳的數值-[{$_SESSION['isize']}]"?></a>
                        <ul style="text-align: left">
                            <li>1：一名嬰兒 (1～12磅)</li>
                            <li>3：孩童，或身短體瘦 (矮) (33磅/15kg)</li>
                            <li>12：普通人類體型 (中等身高和體重) (170磅/75kg)</li>
                            <li>16：非常高，強健的體格或非常胖 (240磅/110kg)</li>
                            <li>20：某方面已經是超大號了 (330磅/150kg)</li>
                            <li>30：馬或牛 (960磅/436kg)</li>
                            <li>36：記錄中的最重人類 (1400磅/634kg)</li>
                            <li>40+：1920磅/872kg (例如夏烏戈納爾．法格恩)</li>
                        </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box02").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box02").onclick = doAnimateHide;
            </script>

        <textarea cols="50%" rows="5" form="usrform" name="posture"></textarea></div>
        <div class="col-sm-12"><a>性格：</a><br>
    <textarea cols="50%" rows="5" form="usrform" name="personality"></textarea></div>
        <div class="col-sm-12"><a>生活背景：</a><br>
    <textarea cols="50%" rows="5" form="usrform" name="background"></textarea></div>

        <div  style="font-size:16px; font-weight:bold; border-radius: 5px;color: black">
            <input type="button" onclick="javascript:location.href='Page04.php'" value="上一頁">
            <input type="submit" id="submit" value="最後送出">
        </div >
    </div>
</div>

</form>
</body>
</html>