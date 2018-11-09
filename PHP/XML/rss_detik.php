<?php

$url = "http://rss.detik.com/index.php/health_berita-sehat";
$data = simplexml_load_file($url);

$items = $data->channel->item;
$title = $data->channel;
$image = $title->image;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
</head>
<body>
	<div align="center">
		<h3>Sony Dwi Kurniawan</h3>
		<h3>16.1.03.03.0022</h3>
	</div>
	
	<?php 
		echo "
			<h1 align='center'><a href='".$title->link."' target='_blank'>".$title->title."</a></h1>
			<h2 align='center'>".$title->description."</h2>
			<h2 align='center'>".$image->title."</h2>
			<div align='center'><a href='".$image->link."' target='_blank'><img src='".$image->url."' align='center'></a></div>";
	?>
	<table width="75%" align="center" border="1">
		<tbody align="center">
			<?php
				foreach ($items as $data_item) {
					echo "<tr>
							<th>".$data_item->title."</th>
						</tr>
						<tr>
							<td style='font-weight: bold;'>".$data_item->pubDate."</td>
						</tr>
						<tr>
							<td>".$data_item->description."
							<br><a href='".$data_item->link."' target='_blank'>Selengkapnya...</a></td>
						</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>