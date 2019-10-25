<?php

$object = $_POST['object'];

//echo $object;

header("Location: https://sd.finam.ru/issues/?jql=cf%5B21001%5D%20%3D%20IT-$object");

?>
