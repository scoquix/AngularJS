 <?php
	$xml=simplexml_load_file("czasopisma.xml") or die("Error: Cannot create object");
	$result = $xml->xpath("/czasopisma/zmienne/*");
	echo json_encode($result);
?> 