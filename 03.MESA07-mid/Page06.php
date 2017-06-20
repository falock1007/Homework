<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
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

        form a {
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

        input {
            text-align: center;
        }

        textarea {
            font-size: 1.5rem;
            color: black;
        !important;
            border-radius: 1rem;
        }


    </style>


</head>


<body>
<p id="title" align="center" style="font: bold 60px 微軟正黑體; color: #7f00ff;">
    <?php
    if ($_SESSION["Player"]) {
        echo "{$_SESSION["Player"]}的角色卡 - 出爐囉～";
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
    <h2>COC系統中最重要的數值</h2>
    <ul>
        <li>SAN值危機！？<br>
        <ul>
            <li>SAN值的初始值是POW的五倍<br>
                意思是所謂的理智值</li>
            <li>當遊戲中角色遭遇「恐怖經歷」時<br>
                就經常需要做理智檢定<br>
                而結果可能導致理智值不斷減少</li>
            <li>理智值的大量減少可能導致角色發瘋<br>
                玩家怎麼去演繹角色的發瘋<br>
                也是COC系統的一大樂趣</li>
        </ul>
    </ul>
    <br>
    <h2>一般成功、困難成功、極限成功</h2>
    <ul>
        <li>舉例來說，遊戲中若要研讀一本完好的外文書<br>
            或一本殘破的古外文書，難度自然會有不同</li>
        <li>困難成功率是一般成功的一半<br>
            極限成功率更是只有1/5<br>
            難度的調節便是以此來進行</li>
    </ul>
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
            <div class="col-sm-12"><a style="color: #e06400;!important;">角色名：</a><input type="text" size="8px"
                                                                                        style="color: black; border-radius: 10px"
                                                                                        value="<?php echo $_SESSION['name']; ?>"
                                                                                        readonly="readonly"/>&ensp;


                <a style="color: #e06400;!important;">性別：</a><input type="text" size="1px"
                                                                    style="color: black; border-radius: 10px"
                                                                    value="<?php if ($_SESSION['gender'] == 1) {
                                                                        echo '女';
                                                                    } else {
                                                                        echo '男';
                                                                    } ?>"
                                                                    readonly="readonly"/>&ensp;
                <a style="color: #e06400;!important;">年齡：</a><input type="text" size="2px"
                                                                    style="color: black; border-radius: 10px"
                                                                    value="<?php echo $_SESSION['old']; ?>"
                                                                    readonly="readonly"/>&ensp;
                <a style="color: #e06400;!important;">職業：</a><input type="text" size="10px"
                                                                    style="color: black; border-radius: 10px"
                                                                    value="<?php echo $_SESSION['careers']; ?>"
                />
                <?php
                $x = $_SESSION['career'];
                $y = array("力量型", "體能型", "靈活型", "魅力型", "敏銳型", "知識型");
                ?>
                <input type="text" size="5px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[$x]; ?>"
                       readonly="readonly"/></div>
        </div>
        <br>
        <div class="row">

            <div class="col-sm-12">
                <a style="color: #e06400;!important;">出生地：</a><input type="text" size="8px"
                                                                     style="color: black; border-radius: 10px"
                                                                     value="<?php echo $_SESSION['born']; ?>"
                                                                     />&ensp;
                <a style="color: #e06400;!important;">居住地：</a><input type="text" size="8px"
                                                                     style="color: black; border-radius: 10px"
                                                                     value="<?php echo $_SESSION['live']; ?>"
                                                                    />&ensp;
                <a style="color: #e06400;!important;">母語：</a><input type="text" size="8px"
                                                                    style="color: black; border-radius: 10px"
                                                                    value="<?php echo $_SESSION['language']; ?>"
                                                                    />&ensp;


                <?php
                $a = $_SESSION['age'];
                $b = array("1920s", "1960s", "現代");
                ?>
                <a style="color: #e06400;!important;">年代：</a><input type="text" size="8px"
                                                                    style="color: black; border-radius: 10px"
                                                                    value="<?php echo $b[$a]; ?>"
                                                                    readonly="readonly"/></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4"><a style="color: #e06400;!important;">體態：</a><br>
                <textarea cols="40" rows="5"><?php echo $_SESSION['posture'] ?></textarea></div>
            <div class="col-sm-4"><a style="color: #e06400;!important;">性格：</a><br>
                <textarea cols="40" rows="5"><?php echo $_SESSION['personality'] ?></textarea></div>
            <div class="col-sm-4"><a style="color: #e06400;!important;">背景經歷：</a><br>
                <textarea cols="40" rows="5"><?php echo $_SESSION['background'] ?></textarea></div>
            <br>
        </div>
        <hr>
        <div class="row">

            <div class="col-sm-1"></div>
            <div class="col-sm-2"><a style="color:red;!important;">STR力量</a><br><input type="text" size="10px"
                                                                                       style="color: black; border-radius: 10px"
                                                                                       value="<?php echo $_SESSION['istr'] ; ?>"
                                                                                       readonly="readonly"/></div>
            <div class="col-sm-2"><a style="color:red;!important;">CON體質</a><br><input type="text" size="10px"
                                                                                       style="color: black; border-radius: 10px"
                                                                                       value="<?php echo $_SESSION['icon'] ; ?>"
                                                                                       readonly="readonly"/></div>
            <div class="col-sm-2"><a style="color:red;!important;">DEX敏捷</a><br><input type="text" size="10px"
                                                                                       style="color: black; border-radius: 10px"
                                                                                       value="<?php echo $_SESSION['idex'] ; ?>"
                                                                                       readonly="readonly"/></div>
            <div class="col-sm-2"><a style="color:red;!important;">APP外貌</a><br><input type="text" size="10px"
                                                                                       style="color: black; border-radius: 10px"
                                                                                       value="<?php echo $_SESSION['iapp'] ; ?>"
                                                                                       readonly="readonly"/></div>
            <div class="col-sm-2"><a style="color:green;!important;">POW意志</a><br><input type="text" size="10px"
                                                                                         style="color: black; border-radius: 10px"
                                                                                         value="<?php echo $_SESSION['ipow'] ; ?>"
                                                                                         readonly="readonly"/></div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2"><a style="color:deepskyblue;!important;">INT智力</a><br><input type="text" size="10px"
                                                                                               style="color: black; border-radius: 10px"
                                                                                               value="<?php echo $_SESSION['iint'] ; ?>"
                                                                                               readonly="readonly"/>
            </div>
            <div class="col-sm-2"><a style="color:deepskyblue;!important;">SIZE體型</a><br><input type="text" size="10px"
                                                                                                style="color: black; border-radius: 10px"
                                                                                                value="<?php echo $_SESSION['isize'] ; ?>"
                                                                                                readonly="readonly"/>
            </div>
            <div class="col-sm-2"><a style="color:deepskyblue;!important;">EDU教育</a><br><input type="text" size="10px"
                                                                                               style="color: black; border-radius: 10px"
                                                                                               value="<?php echo $_SESSION['iedu'] ; ?>"
                                                                                               readonly="readonly"/>
            </div>

            <div class="col-sm-3"></div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-3"><a style="color:red;!important;">HP：</a>
                <input type="number" min="-10" max="<?php echo
                floor(($_SESSION['icon'] + $_SESSION['icon']) / 2); ?>"
                       style="color: black; border-radius: 10px"
                       value="<?php echo
                       floor(($_SESSION['icon'] + $_SESSION['icon']) / 2); ?>"
                />&nbsp;/&nbsp;
                <input type="text" size="3px"
                       style="color: black; border-radius: 10px"
                       value="<?php echo
                       floor(($_SESSION['icon'] + $_SESSION['icon']) / 2); ?>"
                       readonly="readonly"/></div>
            <div class="col-sm-3"><a style="color:deepskyblue;!important;">MP：</a>
                <input type="number" min="0" max="<?php echo $_SESSION['ipow']; ?>"
                       style="color: black; border-radius: 10px"
                       value="<?php echo $_SESSION['ipow']; ?>"
                />&nbsp;/&nbsp;
                <input type="text" size="3px"
                       style="color: black; border-radius: 10px"
                       value="<?php echo $_SESSION['ipow']; ?>"
                       readonly="readonly"/></div>
            <div class="col-sm-3"><a style="color:green;!important;">SAN值：</a>
                <input type="number" min="0" max="99"
                       style="color: black; border-radius: 10px"
                       value="<?php echo $_SESSION['ipow'] * 5; ?>"
                />&nbsp;/&nbsp;
                <input type="number" min="0" max="99"
                       style="color: black; border-radius: 10px"
                       value="<?php echo $_SESSION['ipow'] * 5; ?>"
                />
            </div>

            <div class="col-sm-3"><a style="color:yellow;!important;">幸運值：</a>
                <input type="number" min="0" max="99" style="color: black; border-radius: 10px"
                       value="<?php echo $_SESSION['iluck'] * 5; ?>"/>&nbsp;/&nbsp;
                <input type="text" size="3px"
                       style="color: black; border-radius: 10px"
                       value="99"
                       readonly="readonly"/></div>

        </div>
        <br>
        <hr>

        <div class="row">
            <?php
            $w = $_SESSION['career'];
            $z = array("istr", "icon", "idex", "iapp", "iint", "iedu");
            ?>
            <div class="col-sm-12">
                <input type="text" size="8px"
                       style="color: red; border-radius: 10px"
                       value="<?php echo $y[$x]; ?>"
                       readonly="readonly"/>
                <a>技能一般成功率</a>
                <input type="text" size="8px"

                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[$w]] * 5 ?>"
                       readonly="readonly"/>
                <a>困難成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo floor($_SESSION[$z[$w]] * 5 / 2) ?>"
                       readonly="readonly"/>
                <a>極限成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[$w]] ?>"
                       readonly="readonly"/>
            </div>


            <?php
            $x = $_SESSION['career'];
            $y = array("力量型", "體能型", "靈活型", "魅力型", "敏銳型", "知識型");
            unset($y[$x]);
            $y = array_values($y);
            $w = $_SESSION['career'];
            $z = array("istr", "icon", "idex", "iapp", "iint", "iedu");
            unset($z[$w]);
            $z = array_values($z);
            ?>

            <div class="col-sm-12">
                <input type="text" size="8px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[0]; ?>"
                       readonly="readonly"/>
                <a>技能一般成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[0]] * 4 ?>"
                       readonly="readonly"/>
                <a>困難成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[0]] * 2 ?>"
                       readonly="readonly"/>
                <a>極限成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo floor($_SESSION[$z[0]] * 4 / 5) ?>"
                       readonly="readonly"/>
            </div>

            <div class="col-sm-12">
                <input type="text" size="8px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[1]; ?>"
                       readonly="readonly"/>
                <a>技能一般成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[1]] * 4 ?>"
                       readonly="readonly"/>
                <a>困難成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[1]] * 2 ?>"
                       readonly="readonly"/>
                <a>極限成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo floor($_SESSION[$z[1]] * 4 / 5) ?>"
                       readonly="readonly"/>
            </div>
            <div class="col-sm-12">
                <input type="text" size="8px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[2]; ?>"
                       readonly="readonly"/>
                <a>技能一般成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[2]] * 4 ?>"
                       readonly="readonly"/>
                <a>困難成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[2]] * 2 ?>"
                       readonly="readonly"/>
                <a>極限成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo floor($_SESSION[$z[2]] * 4 / 5) ?>"
                       readonly="readonly"/>
            </div>
            <div class="col-sm-12">
                <input type="text" size="8px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[3]; ?>"
                       readonly="readonly"/>
                <a>技能一般成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[3]] * 4 ?>"
                       readonly="readonly"/>
                <a>困難成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[3]] * 2 ?>"
                       readonly="readonly"/>
                <a>極限成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo floor($_SESSION[$z[3]] * 4 / 5) ?>"
                       readonly="readonly"/>
            </div>
            <div class="col-sm-12">
                <input type="text" size="8px"
                       style="color: darkgreen; border-radius: 10px"
                       value="<?php echo $y[4]; ?>"
                       readonly="readonly"/>
                <a>技能一般成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[4]] * 4 ?>"
                       readonly="readonly"/>
                <a>困難成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo $_SESSION[$z[4]] * 2 ?>"
                       readonly="readonly"/>
                <a>極限成功率</a>
                <input type="text" size="8px"
                       style="color: black; border-radius: 10px" value="<?php echo floor($_SESSION[$z[4]] * 4 / 5) ?>"
                       readonly="readonly"/>

            </div>
        </div>
    </div>
    <br>

</form>
</body>
</html>

