<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TRPG-COC7角色卡</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/boxstylesheet02.css" rel="stylesheet">
    <link href="CSS/title.css" rel="stylesheet">
    <script src="JS/jquery-3.2.1.min.js"></script>
    <?php session_start(); ?>
    <style>
        body { /*背景圖*/
            margin: 0;
            padding: 0;
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

        form input#submit {
            margin: 10px;
        }

        #box {
            width: 500px;
            margin-left: -250px;
        }

        input {
            color: black;
            border-radius: 1rem;
        }

        p input {
            color: #7f00ff;
        }

        .row a.<?php
        $x = $_SESSION['career'];
        $y = array("astr","acon","adex","aapp","aint","aedu");
        echo $y[$x];
        ?> {
            color: red;
        }

    </style>

    <script>
        $(document).ready(function () {
            $("input").change(function () {
                $(this).prop('readonly', true);
            });
        });
    </script>


</head>


<body>
<p id="title1">
    <?php
    if ($_SESSION["Player"]) {
        echo "{$_SESSION["Player"]}的角色卡";
    } else {
        header("Location: Page01.php");
    }
    ?>
</p>
<p id="title2">
    步驟三：欲創建角色的基本數值<br>

<br>
</p>

<form action="Page04-check.php" method="post">
    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"><a class="astr" onclick="doAnimateShow01()">力量STR</a><br>
                <input type="text"
                       style="font: bold 24px 微軟正黑體;text-align: center;"
                       size="10px" name="istr"></div>

            <script>
                function doAnimateShow01() {
                    document.getElementById("box01").style.top = "100px";
                }
            </script>

            <div class="box" id="box01">
                <h2>力量STR</h2>
                <ul style="text-align: left">
                    <li>0：衰弱；沒法站起來甚至端起一杯茶</li>
                    <li>3：弱者，虛弱</li>
                    <li>10：普通人水準</li>
                    <li>18：你見過的力氣最大的人</li>
                    <li>20：世界水準 (奧賽舉重冠軍) ◆人類極限</li>
                    <li>28：超越人類之力 (例如大猩猩或馬)</li>
                    <li>40+：怪物之力</li>
                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box01").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box01").onclick = doAnimateHide;
            </script>

            <div class="col-sm-2"><a class="acon" onclick="doAnimateShow02()">體質CON</a><br>
                <input type="text"
                       style="font: bold 24px 微軟正黑體;text-align: center;"
                       size="10px" name="icon"></div>

            <script>
                function doAnimateShow02() {
                    document.getElementById("box02").style.top = "100px";
                }
            </script>

            <div class="box" id="box02">
                <h2>體質CON</h2>
                <ul style="text-align: left">
                    <li>0：死亡</li>
                    <li>1：病弱；臥床不起，沒有協助就無法自已</li>
                    <li>3：健康堪憂，經常需躺下休息，常年疼痛纏身</li>
                    <li>10：普通人水準</li>
                    <li>18：強壯而精神</li>
                    <li>20：鐵之剛體，可以承受住最強的疼痛 ◆人類極限</li>
                    <li>28：超越人類之體格 (大象)</li>
                    <li>40+：怪物之體，免疫大部分地球疾病</li>
                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box02").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box02").onclick = doAnimateHide;
            </script>

            <div class="col-sm-2"><a class="adex" onclick="doAnimateShow03()">敏捷DEX</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="idex"></div>
            <script>
                function doAnimateShow03() {
                    document.getElementById("box03").style.top = "100px";
                }
            </script>

            <div class="box" id="box03">
                <h2>敏捷DEX</h2>
                <ul style="text-align: left">
                    <li>0：沒有協助無法移動</li>
                    <li>3：緩慢，笨拙，無法行動自如</li>
                    <li>10：普通人水準</li>
                    <li>18：以敏捷靈活展現超凡技藝 (如雜技演員、舞者)</li>
                    <li>20：世界級運動員 ◆人類極限</li>
                    <li>24：超越人類之速 (例如虎)</li>
                    <li>40+：閃電之速，肉眼甚至無法捕捉</li>
                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box03").style.top = "-1000px";
                    event.cancelBubble = true;
                }
                document.getElementById("box03").onclick = doAnimateHide;
            </script>


            <div class="col-sm-2"><a class="aapp" onclick="doAnimateShow04()">外貌APP</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="iapp"></div>

            <script>
                function doAnimateShow04() {
                    document.getElementById("box04").style.top = "100px";
                }
            </script>

            <div class="box" id="box04">
                <h2>外貌APP</h2>
                <ul style="text-align: left">
                    <li>0：醜陋、行為粗鄙；他人會報以恐懼或厭惡</li>
                    <li>3：天生或傷疤地醜陋，也可能是行為上的粗鄙</li>
                    <li>10：普通人水準</li>
                    <li>18：你見過的最漂亮的人，有著天然的吸引力</li>
                    <li>20：魅力和酷的巔峰 (超級名模或世界影星) ◆人類極限</li>
                    <li>注意：外貌只有人類使用，且無法超過20</li>
                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box04").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box04").onclick = doAnimateHide;
            </script>

            <div class="col-sm-2"><a class="apow" onclick="doAnimateShow05()">意志POW</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="ipow"></div>
            <div class="col-sm-1"></div>

            <script>
                function doAnimateShow05() {
                    document.getElementById("box05").style.top = "100px";
                }
            </script>

            <div class="box" id="box05">
                <h2>意志POW</h2>
                <ul style="text-align: left">
                    <li>0：弱者的心，沒有意志力，沒有魔法潛能</li>
                    <li>3：意志力弱，經常成為高智力或高意志人士的人偶或玩物</li>
                    <li>10：普通人</li>
                    <li>18：堅強的心，對溝通不可視之物和魔法有著高潛質</li>
                    <li>20：鋼鐵之心，與靈能領域和不可視世界有著強烈的連結</li>
                    <li>28：超越人類，基本上是非人的存在</li>
                    <li>40+：超越凡人之理解力的邪神</li>
                    <li>注意：人類的意志可能超過100，但這是特例</li>
                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box05").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box05").onclick = doAnimateHide;
            </script>

        </div>
        <br>
        <div class="row">
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0101'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0102'] ?>"

                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0103'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0104'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0105'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0106'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button"
                   style="background-color:#910000;border-radius:10px; text-align:center; font-size: 24px;color: yellow"
                   size="1px" value="<?php echo $_SESSION['dice0107'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2"><a class="aint" onclick="doAnimateShow06()">智力INT</a><br>
                <input type="text"
                       style="font: bold 24px 微軟正黑體;text-align: center;"
                       size="10px" name="iint"></div>

            <script>
                function doAnimateShow06() {
                    document.getElementById("box06").style.top = "100px";
                }
            </script>

            <div class="box" id="box06">
                <h2>智力INT</h2>
                <ul style="text-align: left">
                    <li>0：沒有智商，無法理解周遭的世界</li>
                    <li>3：學得慢，只能理解常用的數位，或閱讀學前教育書籍</li>
                    <li>10：普通人水準</li>
                    <li>18：超凡之腦，可以理解多門語言或法則</li>
                    <li>20：天才 (愛因斯坦、達芬奇、特斯拉等等) ◆人類極限</li>
                    <li>28：超越人類之智</li>
                    <li>40+：邪神之智，可以理解並操作多重次元</li>

                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box06").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box06").onclick = doAnimateHide;
            </script>

            <div class="col-sm-2"><a class="asize" onclick="doAnimateShow07()">體型SIZE</a><br><input type="text"
                                                                        style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                        size="10px" name="isize">
            </div>

            <script>
                function doAnimateShow07() {
                    document.getElementById("box07").style.top = "100px";
                }
            </script>

            <div class="box" id="box07">
                <h2>體型SIZE</h2>
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
                    document.getElementById("box07").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box07").onclick = doAnimateHide;
            </script>

            <div class="col-sm-2"><a class="aedu" onclick="doAnimateShow08()">教育EDU</a><br><input type="text"
                                                                      style="font: bold 24px 微軟正黑體;text-align: center;"
                                                                      size="10px" name="iedu"></div>
            <div class="col-sm-3"></div>

            <script>
                function doAnimateShow08() {
                    document.getElementById("box08").style.top = "100px";
                }
            </script>

            <div class="box" id="box08">
                <h2>教育EDU</h2>
                <ul style="text-align: left">
                    <li>0：新生兒</li>
                    <li>3：任何方面都沒有受過教育</li>
                    <li>12：高中畢業</li>
                    <li>14：大學畢業 (專科學位)</li>
                    <li>16：研究生畢業 (碩士學位)</li>
                    <li>18：博士學位，教授</li>
                    <li>19：某研究領域的世界級權威</li>
                    <li>20：人類極限</li>

                </ul>
            </div>


            <script>
                function doAnimateHide() {
                    document.getElementById("box08").style.top = "-1000px";
                    event.cancelBubble = true;
                }

                document.getElementById("box08").onclick = doAnimateHide;
            </script>

        </div>
        <br>
        <div class="row">
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0201'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button" id="<?php echo $_SESSION['dice0202'] ?>" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0202'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0203'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0204'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button" style="background-color:#002487;border-radius:10px; text-align:center;
font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0205'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
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
        font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0301'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
            <input type="button" style="background-color:#006312;border-radius:10px; text-align:center;
        font-size: 22px; color: yellow;" size="1px" value="<?php echo $_SESSION['dice0302'] ?>"
                   draggable="true"
                   ondragstart="doDragStart(event);"/>
        </div>
        <br>


        <div style="font-size:16px; font-weight:bold; border-radius: 5px;color: black;">
            <input type="button" onclick="javascript:location.href='Page03.php'" value="上一頁">
            <input type="submit" id="submit" value="下一頁">
        </div>
    </div>

    <div id="debug" style="opacity: 0; font-size: xx-small"></div>

    <script>

        function doDragStart(e) {
            document.getElementById("debug").innerHTML += e.target.id + " start dragging.";
            e.target.style.opacity = '0.4';
            e.dataTransfer.setData("text/plain", e.target.value);
        }

        imgCanada.ondragstart = doDragStart;
        imgJapan.addEventListener("dragstart", doDragStart);


        function doDragOver(e) {
            //document.getElementById("debug").innerHTML += e.target.id + " - OnDragOver<br />";
            e.preventDefault();
        }

        divUsa.ondragover = doDragOver;
        divJapan.ondragover = doDragOver;
        divCanada.ondragover = doDragOver;


        function doDragEnter(e) {
            document.getElementById("debug").innerHTML += e.target.id + " - OnDragEnter";
            e.target.classList.add("dragOver");
            e.preventDefault();
        }
        function doDragLeave(e) {
            document.getElementById("debug").innerHTML += e.target.id + " - OnDragLeave";
            e.target.classList.remove("dragOver");
            e.preventDefault();
        }

        divUsa.ondragenter = doDragEnter;
        divUsa.ondragleave = doDragLeave;
        divJapan.ondragenter = doDragEnter;
        divJapan.ondragleave = doDragLeave;
        divCanada.ondragenter = doDragEnter;
        divCanada.ondragleave = doDragLeave;


        function doDrop(e) {
            document.getElementById("debug").innerHTML += e.target.id + " - OnDrop";
            var sSourceId = e.dataTransfer.getData("text/plain");
            if (sSourceId.substr(3, 99) == e.target.id.substr(3, 99)) {
                // document.getElementById("debug").innerHTML += "Yes, Matched<br />";
                e.target.appendChild(document.getElementById(sSourceId));
            }
            e.target.classList.remove("dragOver");
            e.preventDefault();
        }

        divUsa.ondrop = doDrop;
        divJapan.ondrop = doDrop;
        divCanada.ondrop = doDrop;


        function doDragEnd(e) {
            e.target.style.opacity = "1.0";
            e.preventDefault();
        }
        imgUsa.ondragend = doDragEnd;
        imgJapan.ondragend = doDragEnd;
        imgCanada.ondragend = doDragEnd;


    </script>


</form>


</body>
