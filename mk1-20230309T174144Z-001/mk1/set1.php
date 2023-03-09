<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title>Lista de tanques</title>
	
</head>
<body>
    <div class = " texto" >
	<header>
		<h1>Lista de tanques</h1>
	</header>
	<main>
		<ul>
<?php
$IFV_ARRAY = array("BMP-2M","m3 bradley","marder" ,"warrior" );

list($IFV1 , $IFV2,$IFV3 ,$IFV4) = $IFV_ARRAY;
echo "Tanques a la venta tipo IFV;  $IFV1 ,  $IFV2 ,  $IFV3 ,  $IFV4";
?>
		</ul>
	</main>
      
	<a href="index.php"> <input type="buton" value="volver"> </a>
    </div>
</body>
</html>