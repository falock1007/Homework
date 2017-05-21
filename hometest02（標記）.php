<?php
if(isset($_GET['x'])) {
    $Math=$_GET["Math"];
    $x=$_GET["x"];
    $y=$_GET["y"];
    $t=$x%$y;
}

if($Math=='+'){
    $r=$x+$y;
} else if($Math=='-') {
    $r=$x-$y;
} else if($Math=='×') {
    $r = $x * $y;
} else if($Math=='÷'){
    $r=floor($x/$y).'......'.$t;}

if(isset($_GET['years'])) {
    $years = $_GET['years'];
    $leap = "閏年";
    $average = "平年";
}
?>
<!--如果$y為0或未填時網頁無法正常運作，但$x就沒有影響-->

<meta charset="utf8">

<form>

    <input type="text" name="x" value="<?php echo $x; ?>">
        <select name="Math">
        <option name="+" value="+" <?php if($_GET['Math']=="+"){echo "selected";} ?>>+</option>
        <option name="-" value="-" <?php if($_GET['Math']=="-"){echo "selected";} ?>>-</option>
        <option name="×" value="×" <?php if($_GET['Math']=="×"){echo "selected";} ?>>×</option>
        <option name="÷" value="÷" <?php if($_GET['Math']=="÷"){echo "selected";} ?>>÷</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <?php if(isset($_GET['x'])){
    echo $r;}
    ?>
    </input>
    <br>
    <input type="reset" value="重置">
<!--    --><?php //echo $x%$y; ?>
<!--    加上這句之後，以下內容在上面的「＝」按鈕按下後才會出現-->
</form>
<br>
<form>
    西元
    <input type="text" name="years" value="<?php echo $years; ?>">年
    <input type="submit" value="判定"><?php if ($years % 4000 == 0){
        echo $average;
    } else if($years % 400 == 0) {
        echo $leap;
    } else if ($years % 100 == 0) {
        echo $average;
    } else if ($years % 4 == 0) {
        echo $leap;
    } else {
        echo $average;
    } ?>

    <br>
    <input type="reset" name="reset2" value="重置">
</form>

