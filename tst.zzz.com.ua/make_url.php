<?php

$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$hour_from = $_POST['hour_from'];
$hour_to = $_POST['hour_to'];
$minutes_from = $_POST['minutes_from'];
$minutes_to = $_POST['minutes_to'];

//header("Location: https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%20$date_to%20after%20$date_from");
//header("Location: https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%20$date_to%20after%20$date_from");

header("Location: https://sd.finam.ru/issues/?jql=type%20%3D%20Incident%20AND%20created%20%3E%3D%20%22$date_from%20$hour_from%3A$minutes_from%22%20AND%20created%20%3C%3D%20%22$date_to%20$hour_to%3A$minutes_to%22%20ORDER%20BY%20created%20ASC");

// type = Incident AND created >= "2019/09/17 12:00" AND created <= "2019/09/18 00:00" ORDER BY created ASC
?>

<!-- https://sd.finam.ru/issues/?jql=type%20%3D%20Incident%20AND%20created%20%3E%3D%20%222019%2F09%2F17%2012%3A00%22%20AND%20created%20%3C%3D%20%222019%2F09%2F18%2000%3A00%22%20ORDER%20BY%20created%20ASC -->
