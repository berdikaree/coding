<?php 
$file = "resep.xml";
$xml = simplexml_load_file($file);
echo "<h1>".$xml->judul."</h1>";
// echo $xml->bahan[2];
echo "<h2>Bahan</h2>";
echo "<ul>";
foreach ($xml->bahan as $bahan) {
	echo "<li>".$bahan." Jumlah ".$bahan['jumlah']." ".$bahan['satuan']."</li>";
}
echo "</ul>";

echo "<h2>Cara Membuat</h2>";
echo "<ul>";
foreach ($xml->Cara_membuat->langkah as $langkah) {
	echo "<li>".$langkah."</li>";
}
echo "</ul>";
?>