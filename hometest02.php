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
//} else if($Math=='÷' && $y==0) {
//    "除數不得為0";
} else if($Math=='÷'){
    $r=floor($x/$y).'......'.$t;}
//} else {$r=$x/$y;}

if(isset($_GET['years'])) {
    $years = $_GET['years'];
    $leap = "閏年";
    $average = "平年";
}
?>

<meta charset="utf8">

<form>
<!--    action="hometest01.php"-->

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

