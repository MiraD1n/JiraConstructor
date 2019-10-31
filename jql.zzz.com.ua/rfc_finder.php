<?php

$object = $_POST['object'];

//echo $object;

header("Location: https://sd.finam.ru/issues/?jql=text%20~%20$object%20AND%20type%20%3D%20RFC%20ORDER%20BY%20key%20DESC");

?>
