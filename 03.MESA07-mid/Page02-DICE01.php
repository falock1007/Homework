<?php
$dice01 = array();
$m = 7;
for ($i = 0; $i < $m; $i++) {
    $dice3d6 = rand(1, 6) + rand(1, 6) + rand(1, 6);
    $dice01[$i] = $dice3d6;
}?>



    <input name="dice0101" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[0]}"?>" readonly="readonly"/>
    <input name="dice0102" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[1]}"?>" readonly="readonly"/>
    <input name="dice0103" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[2]}"?>" readonly="readonly"/>
    <input name="dice0104" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[3]}"?>" readonly="readonly"/>
    <input name="dice0105" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[4]}"?>" readonly="readonly"/>
    <input name="dice0106" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[5]}"?>" readonly="readonly"/>
    <input name="dice0107" type="text" style="background-color:#910000;border-radius:10px; text-align:center; font-size: 22px" size="1px" value="<?php echo "{$dice01[6]}"?>" readonly="readonly"/>






