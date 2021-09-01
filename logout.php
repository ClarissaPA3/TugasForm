<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
	<title>Logout</title>
</head>
<body>
	<?php
	echo "<h3>Logout Berhasil</h3>";
	echo "<meta http-equiv= 'refresh' content='1 url= login.php'>";
	?>
</body>
</html>
