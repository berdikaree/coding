<?php
$file = "book.xml";
$buku = simplexml_load_file($file);
echo "<h2>Book List</h2>";
foreach ($buku->book as $buku_baru) {
	echo "<p>";
	echo "<strong>Title : </strong> ".$buku_baru->title."<br>";
	echo "Author : ".$buku_baru->author."<br>";
	echo "Publisher : ".$buku_baru->publisher."<br>";
	echo "Price : ".$buku_baru->price."<br>";
	echo "</p>";
}
?>