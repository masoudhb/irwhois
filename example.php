<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="domain" placeholder="example.ir">
		<input type="submit" value="whois" name="submit">
	</form>
	<br>
	<?php
	if (isset($_POST['submit'])) {
		require_once 'irwhois.php';
		$result = whois($_POST['domain']);
		echo '<pre>';
		echo $result;
		echo '</pre>';
	}
	?>
</body>
</html>
