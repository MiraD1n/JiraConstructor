<?php
$date_to = $_POST['date_to'];
$date_from = $_POST['date_from'];
header("Location: https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%20$date_to%20after%20$date_from");
?>
