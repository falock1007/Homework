<h1>機車的划算加油量</h1>

<?php
//機車版
if(isset($_GET["price"])) {
    $price = $_GET["price"];
    }
?>

<form>
    油價<input type="text" name="price" value="<?php echo $price ?>">元/公升
    <input type="submit" value="加多少划算呢？">
</form>


<?php
    for ($i = 1; $i <= 3.5; $i+=0.1) {
        $end = substr($price * $i * 100, 2, 2) . "<br>";
        if ($end <= 44 && $end>=30) {
            echo '加油<mark>' . $i . '</mark>公升' . '油價為<mark>' .
                $price*$i . '</mark>元' ."<br>";
    }
}
?>
