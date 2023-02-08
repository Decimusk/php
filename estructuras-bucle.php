<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
<title>PHP</title>
<meta name="language" content="es">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php
$cont=1;

while($cont<5){
	$cont++;
	echo $cont.'<br>';
	
}
echo '<hr>';


$cont=1;
do{
	$cont++;
	echo $cont.'<br>';
	
}
while($cont<5);
echo '<hr>';


echo '<h1>FOR</h1>';
for($cont=1; $cont<10; $cont++){
	echo $cont.'<br>';
}
echo '<hr>';

echo '<h1>FOReach</h1>';
$array = array('LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES');
foreach ($array as $value) {
	echo $value.'<br>';
}
echo '<hr>';


foreach ($array as $key => $var) {
	echo $var.'-'.$key.'<br>';
}
?>

</body>
</html>