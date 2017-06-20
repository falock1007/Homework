<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    session_destroy();
    ?>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/boxstylesheet.css" rel="stylesheet">
    <style type="text/css">

        body{ /*背景圖*/
            margin:0;
            padding:0;
            background: url(images/Free-Download-Cthulhu-Picture.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #title {
            position: fixed;
            border:0px solid; text-align: center ;
            width:700px;
            left:50%;
            margin-left: -350px;
            padding-top: 5%;
            padding-bottom: 45%;
        }


        #Footer {
            position: fixed;
            border:0px solid; text-align: center ;
            width:700px;
            left:50%;
            margin-left: -350px;
            top:80%;
        }


    </style>
</head>

<body>

    <div id="title" onclick="doAnimateShow()">
        <p style="color: #FFFFFF; font: 4rem 微軟正黑體">TRPG克蘇魯神話角色卡</p>
    </div>


<script>
    function doAnimateShow() {
        document.getElementById("box").style.top = "50px";
    }
</script>


<div id="box" style="font-family: 微軟正黑體">
    <h2>什麼是TRPG？</h2>
    <ul>
        <li>桌上角色扮演遊戲 (Tabletop Role Playing Game)：</li>
        <ul>
            <li>即是以桌遊的形式來進行的RPG遊戲</li>
            <li>參與者至少需要1人擔任主持人 (Game Master)<br>
                其他人則為玩家 (player)</li>
            <li>主持人需要準備「劇本」(Script)<br>
                而玩家則需要撰寫「角色」(Character)</li>
        </ul>
        <li>主持人要做什麼？</li>
        <ol>
            <li>解說劇情</li>
            <li>扮演非玩家角色，如村民、怪物...</li>
            <li>對玩家的行為作出裁決</li>
            <li>初學者無法擔當</li>
        </ol>
        <li>玩家要做什麼？</li>
        <ol>
            <li>創角色</li>
            <li>扮演角色、演繹角色</li>
        </ol>
    </ul>
    <h2>什麼是COC？</h2>
    <ul>
        <li>COC是所謂的遊戲系統，可以想像成劇本 (Script)的世界觀</li>
        <li>全名為「克蘇魯的神話」(Call of Cthulhu)</li>
        <li>類別為解謎性質較高的恐怖遊戲</li>
    </ul>
    <h2>個人非常推薦的COC影片</h2>
    <ul>
        <li><a href="https://www.youtube.com/watch?v=pYt5VfC2uF0&t=99s" target="_blank">
                其實超級有趣的克蘇魯神話TRPG
            </a></li>
        <li><a href="https://www.youtube.com/watch?v=Ysf19E9a0CA" target="_blank">ゆっくり×ぷよキャラで冒涜的なＴＲＰＧ実況</a></li>
    </ul>


</div>



<script>
    function doAnimateHide() {
        document.getElementById("box").style.top = "-2000px";
        event.cancelBubble = true;
    }

    document.getElementById("box").onclick = doAnimateHide;

</script>


<div id="Footer" style="text-align:center ;font-family: 微軟正黑體">
    <form action="Page01-check.php" method="post">
        <a style="color: #FFFFFF; font-size: 2rem;">請輸入玩家暱稱：</a>
        <input type="text" style="font-size:2rem" name="Player">
        <input type="submit" value="確認" style="font-size:2rem; font-weight:bold;
            border-radius: 0.5rem;">
        <p style="color: #FFFFFF; font-size: 1.5rem ">(PS:只能輸入中文、英文，以及數字)</p>
    </form>
</div>

</body>

</html>