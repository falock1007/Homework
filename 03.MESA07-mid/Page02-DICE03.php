<?php
$dice03 = array();
$o = 2;
for ($k = 0; $k < $o; $k++) {
    $luck = rand(1, 6) + rand(1, 6) + rand(1, 6);
    $dice03[] = $luck;
}
?>

    <input name="dice0301" type="text" style="background-color:#006312;border-radius:10px; text-align:center; font-size: 22px" size="1px"value="<?php echo "{$dice03[0]}"?>" readonly="readonly"/>
    <input name="dice0302" type="text" style="background-color:#006312;border-radius:10px; text-align:center; font-size: 22px" size="1px"value="<?php echo "{$dice03[1]}"?>" readonly="readonly"/>
