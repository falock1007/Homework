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


    </style>


</head>


<body>
<p id="title" align="center" style="font: bold 60px 微軟正黑體; color: #7f00ff;">
    <?php
    if ($_SESSION["Player"]) {
        echo "{$_SESSION["Player"]}的角色卡 - 最後步驟";
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

<form style="text-align: center; font: bold 22px 微軟正黑體; color: yellow">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><a>角色姓名：</a><input type="text" size="10px"
                                                     style="color: black; border-radius: 10px"
                                                     value="<?php echo $_SESSION['name']; ?>"
                                                     readonly="readonly"/></div>


            <div class="col-sm-2"><a>性別：</a><input type="text" size="2px"
                                                   style="color: black; border-radius: 10px"
                                                   value="<?php if ($_SESSION['gender'] == 1) {
                                                       echo '女';
                                                   } else {
                                                       echo '男';
                                                   } ?>"
                                                   readonly="readonly"/></div>
            <div class="col-sm-2"><a>角色年齡：</a><input type="text" size="2px"
                                                     style="color: black; border-radius: 10px"
                                                     value="<?php echo $_SESSION['old']; ?>"
                                                     readonly="readonly"/></div>
            <div class="col-sm-5"><a>職業：</a><input type="text" size="10px"
                                                   style="color: black; border-radius: 10px"
                                                   value="<?php echo $_SESSION['careers']; ?>"
                                                   readonly="readonly"/>
                <?php
                $x = $_SESSION['career'];
                $y = array("力量型", "體能型", "靈活型", "魅力型", "敏銳型", "知識型");
                ?>
                <input type="text" size="10px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[$x]; ?>"
                       readonly="readonly"/></div>
        </div>
        <br>
        <div class="row">

            <div class="col-sm-3"><a>出生地：</a><input type="text" size="10px"
                                                    style="color: black; border-radius: 10px"
                                                    value="<?php echo $_SESSION['born']; ?>"
                                                    readonly="readonly"/></div class="col-sm-3">
            <div class="col-sm-3"><a>居住地：</a><input type="text" size="10px"
                                                    style="color: black; border-radius: 10px"
                                                    value="<?php echo $_SESSION['live']; ?>"
                                                    readonly="readonly"/></div>
            <div class="col-sm-3"><a>母語：</a><input type="text" size="10px"
                                                   style="color: black; border-radius: 10px"
                                                   value="<?php echo $_SESSION['language']; ?>"
                                                   readonly="readonly"/></div>


            <?php
            $a = $_SESSION['age'];
            $b = array("1920s", "1960s", "現代");
            ?>
            <div class="col-sm-3"><a>背景年代：</a><input type="text" size="10px"
                                                     style="color: black; border-radius: 10px"
                                                     value="<?php echo $b[$a]; ?>"
                                                     readonly="readonly"/></div>
        </div>
        <br>
        <div class="row">

            <div class="col-sm-1"></div>
        <div class="col-sm-2"><a>STR力量：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['istr'] * 5; ?>"
                                 readonly="readonly"/></div>
        <div class="col-sm-2"><a>CON體質：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['icon'] * 5; ?>"
                                 readonly="readonly"/></div>
        <div class="col-sm-2"><a>DEX敏捷：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['idex'] * 5; ?>"
                                 readonly="readonly"/></div>
        <div class="col-sm-2"><a>APP外貌：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['iapp'] * 5; ?>"
                                 readonly="readonly"/></div>
        <div class="col-sm-2"><a>POW意志：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['ipow'] * 5; ?>"
                                 readonly="readonly"/></div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-2"><a>INT智力：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['iint'] * 5; ?>"
                                 readonly="readonly"/></div>
        <div class="col-sm-2"><a>SIZE體型：</a><br><input type="text" size="10px"
                                  style="color: black; border-radius: 10px"
                                  value="<?php echo $_SESSION['isize'] * 5; ?>"
                                  readonly="readonly"/></div>
        <div class="col-sm-2"><a>EDU教育：</a><br><input type="text" size="10px"
                                 style="color: black; border-radius: 10px"
                                 value="<?php echo $_SESSION['iedu'] * 5; ?>"
                                 readonly="readonly"/></div>
            <div class="col-sm-2"><a>LUCK幸運：</a><br><input type="text" size="10px"
                                                           style="color: black; border-radius: 10px"
                                                           value="<?php echo $_SESSION['iluck'] * 5; ?>"
                                                           readonly="readonly"/></div>
            <div class="col-sm-2"></div>
        </div>

        <br>
    <div class="row">
        <div class="col-sm-4"><a>HP：</a><br><input type="text" size="10px"
                              style="color: black; border-radius: 10px"
                              value="<?php echo
                              floor(($_SESSION['icon'] + $_SESSION['icon']) / 2); ?>"
                              readonly="readonly"/></div>
        <div class="col-sm-4"><a>MP：</a><br><input type="text" size="10px"
                              style="color: black; border-radius: 10px"
                              value="<?php echo $_SESSION['ipow']; ?>"
                              readonly="readonly"/></div>
        <div class="col-sm-4"><a>SAN值：</a><br><input type="text" size="10px"
                                style="color: black; border-radius: 10px"
                                value="<?php echo $_SESSION['ipow'] * 5; ?>"</div>
    </div>
        <br>
        <div class="row">
        <?php
        $w = $_SESSION['career'];
        $z = array("istr","icon","idex","iapp","iint","iedu");
                ?>
        <div class="col-sm-12"><input type="text" size="10px"
                              style="color: darkgreen; border-radius: 10px"
                              value="<?php echo $y[$x]; ?>"
                    readonly="readonly"/><a>技能成功率</a><input type="text" size="10px"

                            style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[$w]]*5?>"
                                                            readonly="readonly"/>

<?php
$x = $_SESSION['career'];
$y = array("力量型", "體能型", "靈活型", "魅力型", "敏銳型", "知識型");
$w = $_SESSION['career'];
$z = array("istr","icon","idex","iapp","iint","iedu");

?>

            <input type="text" size="10px"
                   style="color: darkgreen; border-radius: 10px"
                   value="<?php echo $y[$x]; ?>"
                   readonly="readonly"/>
            <input type="text" size="10px"

                   style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[$w]]*4?>"
                   readonly="readonly"/>

        </div>
    </div>

<!--                其他一般成功率*4</a></div>-->
<br>

        <div>

             <div><a>性格：</a><br>
                <textarea></textarea></div><br>
            <div><a>背景：</a><br>
            <textarea></textarea></div>
            <br>


    </div>
</form>
</body>
</html>

<!---->
<!--輸出-->
<!---->
<!---->
<!--title: OOO的角色卡-->
<!--角色名稱:-->
<!--年齡:-->
<!--性別:-->
<!--年代:-->
<!--信用評級:-->
<!--體格值:-->
<!--移動能力:-->
<!---->
<!--體型(有選才有)-->
<!--身高:-->
<!--體型:-->
<!---->
<!--攜帶物品(可編輯)-->
<!---->
<!--檢定(按鈕)-->
<!---->
<!--SAN CHECK(可編輯)-->
<!--SAN值減少-->
<!---->
<!--屬性(可編輯)-->
<!--選擇+補正-->
<!--技能(可編輯)-->
<!--選擇+補正-->
<!--傷害-->
<!--骰子+DB(可取消)+補正-->
