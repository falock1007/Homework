<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="JS/bootstrap.min.css" rel="stylesheet">
    <?php session_start();?>
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

        form div{
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

    </style>

    <script>
        window.history.forward(1);
    </script>
</head>


<body>
<p id="title" align="center" style="font: bold 60px 微軟正黑體; color: #7f00ff;">
    <?php
    if($_SESSION["Player"]){
        echo "{$_SESSION["Player"]}的角色卡 - 步驟二";
    }else{
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
        <ul>
            <li>玩家(Player) 創造遊戲中的 角色(Character)</li>
            <li>創造一個與自己相仿的角色，有助於新手掌握</li>
            <li>創造一個與自己迥異的角色，則是TRPG的醍醐味</li>
        </ul>
        <h2>職業類型舉例</h2>
        <ul>
            <li>職業種類分為六種</li>
        </ul>
        <ol>
            <li>力量型職業：身體壯碩、孔武有力
                <ul>
                    <li>範例：舉重選手、重拳手</li>
                </ul>
            </li>
            <li>體能型職業：健康少病、吃苦耐勞
                <ul>
                    <li>範例：農家、探險家、馬拉松選手</li>
                </ul>
            </li>
            <li>靈活型職業：迅捷靈敏、手巧
                <ul>
                    <li>跳高選手、技巧型拳擊手、魔術師、扒手</li>
                </ul>
            </li>
            <li>魅力型職業：外貌、口才、氣質、歌聲
                <ul>
                    <li>範例：偶像、演員、宗教領袖、政治家</li>
                </ul>
            </li>
            <li>敏銳型職業：見微知著、思考靈敏、感官敏銳
                <ul>
                    <li>範例：偵探、員警、棋手、音樂家</li>
                </ul>
            </li>
            <li>知識型職業：學問淵博
                <ul>
                    <li>範例：學者、醫生、律師</li>
                </ul>
            </li>
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



<form style="text-align: center; font: bold 22px 微軟正黑體; color: yellow"
      action="Page03-check.php" method="post">



    <div id="one"><a>角色姓名：</a><input type="text" name="name" size="10px"
        value="<?php echo $_SESSION['name'] ?>"
                                style="color: black; border-radius: 10px">
        <p style="font-weight: bold;font-size: 16px;color: red;opacity:0
                <?php
                    if($_SESSION['error']==2 || $_SESSION['error']==3){
                    echo '+1';
                }?>; text-align: center">
        <?php
            if ($_SESSION['error']==2){
                echo '角色姓名尚未填寫';
            }else if ($_SESSION['error']==3){
                echo '無符號、空格且僅能使用英文或中文';
            }else {echo '我是透明der';}
            ?>
        </p></div>
    <div id="two"><a>性別:</a>
        <input id="radio" type="radio" name="gender" value="1" >女
        <input id="radio" type="radio" name="gender" value="2">男
        <script>
            $(document).ready(function() {
                $('input[type=radio][name=gender]').change(function() {
                    if (this.value == 'allot') {
                        alert("Allot Thai Gayo Bhai");
                    }
                    else if (this.value == 'transfer') {
                        alert("Transfer Thai Gayo");
                    }
                });
            });
        </script>
        <p style="font-weight: bold;font-size: 16px;color: red;opacity:0
        <?php
        if($_SESSION['error']==6){
            echo '+1';
            unset($_SESSION['error']);
        }?>; text-align: center">

            性別尚未勾選
        </p>
    </div>
    <div id="three">
        <a>年齡：</a><input type="text" size="5px" name="old"
                         value="<?php echo $_SESSION['old'] ?>"
                         style="color: black; border-radius: 10px">
        <p style="font-weight: bold;font-size: 16px;color: red;opacity:0
        <?php
        if($_SESSION['error']==4 || $_SESSION['error']==5 ||
            $_SESSION['error']==9 || $_SESSION['error']==10){
            echo '+1';
        }?>; text-align: center">
            <?php
            if ($_SESSION['error']==4){
                echo '年齡尚未填寫';
            }else if ($_SESSION['error']==5){
                echo '請只輸入阿拉伯數字';
            }else if ($_SESSION['error']==9){
                echo '年紀太小';
            }else if ($_SESSION['error']==10){
                echo '年紀太大';
            }else {echo '我是透明der';}
            ?>
        </p>
    </div>
    <div id="four">
        <a>職業：</a><input type="text" name="careers"
                         value="<?php echo $_SESSION['careers'] ?>"
                         style="color: black; border-radius: 10px"><br>
        <p style="font-weight: bold;font-size: 16px;color: red;opacity:0
        <?php
        if($_SESSION['error']==11){
            echo '+1';
            unset($_SESSION['error']);
        }?>; text-align: center">
            請填入職業
        </p>
        <a>職業類型：</a><br>
        <input type="radio" name="career" value="0">力量型職業
        <input type="radio" name="career" value="1">體能型職業
        <input type="radio" name="career" value="2">靈活型職業<br>
        <input type="radio" name="career" value="3">魅力型職業
        <input type="radio" name="career" value="4">敏銳型職業
        <input type="radio" name="career" value="5">知識型職業
        <p style="font-weight: bold;font-size: 16px;color: red;opacity:0
        <?php
        if($_SESSION['error'] ==7){
            echo '+1';
        }?>; text-align: center">
            職業類型尚未勾選
        </p>
    </div>



    <div id="seven"><a>背景年代：</a>
        <input id="years"type="radio" name="age" value="0">1920s
        <input type="radio" name="age" value="1">1960s
        <input type="radio" name="age" value="2">現代
        <p style="font-weight: bold;font-size: 16px;color: red;opacity:0
            <?php
            if($_SESSION['error']==8){
                echo '+1';
            }?>; text-align: center">
                背景年代尚未勾選
        </p>
    </div>


    <input id="submit" type="submit" value="下一頁" style="color:black;font-size:16px; font-weight:bold;
    border-radius: 5px;" />

</form>

<?php unset($_SESSION['error']); ?>
</body>
</html>

