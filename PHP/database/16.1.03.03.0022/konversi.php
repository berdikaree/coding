<?php
	
	include 'host.php';

	$sql = "SELECT harga_sewa FROM mobil WHERE no_mobil='M09'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0);{ 
		while($row = $result->fetch_assoc()){
			echo "<div>".$row['harga_sewa']."</div>";
		}
	}

?>