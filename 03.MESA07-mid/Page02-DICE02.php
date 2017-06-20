<?php
$dice02 = array();
$n = 5;
for ($j = 0; $j < $n; $j++) {
    $dice2d6 = rand(1, 6) + rand(1, 6) + 6;
    $dice02[] = $dice2d6;
}
?>

    <input name="dice0201" type="text" style="background-color:#002487;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice02[0]}"?>" readonly="readonly"/>
    <input name="dice0202" type="text" style="background-color:#002487;border-radius:10px; text-align:center; font-size: 22px" size="1px" size="3px" value="<?php echo "{$dice02[1]}"?>" readonly="readonly"/>
    <input name="dice0203" type="text" style="background-color:#002487;border-radius:10px; text-align:center; font-size: 22px" size="1px" size="3px" value="<?php echo "{$dice02[2]}"?>" readonly="readonly"/>
    <input name="dice0204" type="text" style="background-color:#002487;border-radius:10px; text-align:center; font-size: 22px" size="1px" size="3px" value="<?php echo "{$dice02[3]}"?>" readonly="readonly"/>
    <input name="dice0205" type="text" style="background-color:#002487;border-radius:10px; text-align:center; font-size: 22px" size="1px" size="3px" value="<?php echo "{$dice02[4]}"?>" readonly="readonly"/>

