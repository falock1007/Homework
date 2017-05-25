<?php
  $poker=array();
  $n=52;
  for($i=0;$i<$n;$i++){
      $poker[]=$i;
      echo "{$poker[$i]}\r";
  }
   echo "<hr>";
  for($i=$n-1;$i>=0;$i--){
      $random=rand(0,$i);
      $temp=$poker[$random];
      $poker[$random]=$poker[$i];
      $poker[$i]=$temp;
  }
  for($i=0;$i<$n;$i++)
      echo "{$poker[$i]}\r";

//$x=52;
//
//$poker = array();
//for ($i=0; $i<$x; $i++){
//    do {
//        $temp = rand(0, $x - 1);
//        $isRepeat = false;
//        for ($j = 0 ; $j < $i; $j++){
//            if ($poker[$j] == $temp) {
//                //重複
//                $isRepeat = true;
//                break;
//            }
//        }
//    }while($isRepeat);
//
//    $poker[] = $temp;
//
//    echo $poker[$i] . '<br>';
//}

//$x=52;
//
//$poker = array();
//
//for ($i=0; $i<$x; $i++) {
//    do {
//        $isRepeat = false;
//        $temp = rand(0, $x - 1);
//        if (!$check[$temp]) {
//            $poker[] = $temp;
//            $check[$temp] = true;
//        }
//    } while ($isRepeat);
//    echo $poker[$i] . '<br>';
//}