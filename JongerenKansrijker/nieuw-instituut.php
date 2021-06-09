<?php 

include("database.php");
include("functions.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Jongeren Kansrijker</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Instituut Toevoegen</h1>
    <form method="post" action="functions.php">
		<p>Instituut</p>
		<input type="text" name="instituut" placeholder="Naam">
        <input type="text" name="telefoon" placeholder="Telefoon">
		<input type="submit" name="addInstituut" value="toevoegen">
	</form>
</body>
</html>
