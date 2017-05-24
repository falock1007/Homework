<table border="1" width="50%" align="center">

    <?php $col = 10; $max=100;
for($x=1;$x<=$max;$x++){
    $z=0;
    for ($y = $x; $y >= 1; $y--) {
        if($x%$y==0){
            $z++;
            if($z>2){
                break;
            }
        }
    }
    if($z==2){
        $n = "<td bgcolor='orange'>" . $x . "</td>";
    } else {
        $n = "<td>" . $x . "</td>";

    }
    if($x%$col==1){
        echo "<tr>" . $n;
    } elseif($x%$col==0){
        echo $n . "</tr>";
    } else{
        echo $n;
}}
?>

</table>

