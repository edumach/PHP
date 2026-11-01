<?php session_start(); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Načti jméno</title>
</head>
<body>

<h1>Načti jméno</h1>

<p>
	<form target="jmeno_zobraz.php">
	    Jméno: <input type="text" name="j">
	    <input type="submit">
	</form>
</p>

<?php
if($_GET){
   $_SESSION['jmeno'] = $_GET['j'];
}
?>

</body>
</html>