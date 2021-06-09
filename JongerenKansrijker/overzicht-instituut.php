<?php 

require_once("database.php");
require_once("functions.php");

$sql = "SELECT * FROM instituut";
$statement = config::connect()->prepare($sql);
$statement->execute();
$instituten = $statement->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Camping village</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/medewerker.css">
</head>
<body>



<header>
	<div class="wrapper">
	</div>
</header>
<div class="containerTable">
  <h2>Overzicht Instituut</h2>
  <ul class="responsive-table">
    <li class="table-header" id="li">
      <div class="col col-1">Code</div>
      <div class="col col-1">Instituut</div>
      <div class="col col-3">Telefoon</div>
      <a href="nieuw-instituut.php">Nieuw</a>
    </li>
    <?php foreach($instituten as $instituut): ?>
      <li class="table-row" id="li">
        <div class="col col-1" data-label="instituutcode"><?=$instituut->instituutscode;?></div>
        <div class="col col-1" data-label="instituut"><?=$instituut->instituut;?></div>
        <div class="col col-3" data-label="instituuttelefoon"><?=$instituut->instituuttelefoon;?></div>
        <div class="col col-1" data-label="buttons">
          <a href="deleteActiviteiten.php?id=<?=$instituut->instituutscode?>">Delete</a>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

</body>
</html>
