<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php  
$telefonos = array(
    array("iphone15", 15000),
    array("huawei", 40000),
    array("samsung", 7500),
    array("oppo", 3000),
    array("motorola", 1500),
);
array_push($telefonos, array("vivo", 2000));
array_push($telefonos, array("xiomi", 3000));
usort($telefonos, function($a, $b) {
    return $a[1] <=> $b[1];
});
foreach ($telefonos as $telefono) {
    echo "telefonos: " . $telefono[0] . ", precio: " . $telefono[1] . " ";
}
?>
</body>
</html>