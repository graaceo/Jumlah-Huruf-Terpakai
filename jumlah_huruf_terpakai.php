<?php
$string = "lima ratus ribu rupiah";
$some_string = preg_replace("/[^A-Za-z]/","",$string);
$jumlah_string = strlen($some_string);

for ($i=0; $i < $jumlah_string ; $i++) {
echo $some_string[$i]." : ".substr_count($some_string, $some_string[$i])."<br/>";
}
echo "Jumlah kata : ".strlen($some_string);


?>
