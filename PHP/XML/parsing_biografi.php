<?php
$file = "biografi.xml";
$bio = simplexml_load_file($file);

echo "PARSING biografi.xml";

foreach ($bio->biodata as $biodata) {
	echo "<br>BIODATA";
	echo "<br>".$biodata->nama;
}
?>