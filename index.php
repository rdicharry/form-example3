<?php

echo "Enter a plant name:";
$commonName = "";
$botanicalName = "";
if(isset($_POST['common-name']) && isset($_POST['botanical-name'])) {
	$botanicalName = $_POST['botanical-name'];
	$commonName = $_POST['common-name'];
	$query = "INSERT INTO plants VALUES ($commonName, $botanicalName)";

}
echo <<<_END
<html>
<head>
<title>Plant Names</title>
</head>
<body>
<form method="post" action="index.php">
Common Name
<input type="text" name="common-name">
<br>
Botanical (Latin) Name
<input type="text" name="botanical-name">
<br>
<input type="submit" value="Add Record">
</form>
_END;

if(strlen($commonName) > 0 || strlen($botanicalName) > 0) {
	echo <<<_END
	<div>
	$commonName:: <em > $botanicalName</em >
</div >
_END;
}
echo <<<_END
</body>
</html>

_END;



?>