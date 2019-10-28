<?php

$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$hour_from = $_POST['hour_from'];
$hour_to = $_POST['hour_to'];
$minutes_from = $_POST['minutes_from'];
$minutes_to = $_POST['minutes_to'];

if (empty($date_from)){
   $date_from = '2019-10-23';
} elseif (empty($date_to)) {
  $date_to = '2019-10-23';
}

if ($date_to < $date_from){
  echo "Wrong date";
  exit;
} elseif ($hour_to < $hour_from){
  echo "Wrong time";
  exit;
}

if ($_POST['action'] == 'Jira') {
  header("Location: https://sd.finam.ru/issues/?jql=type%20%3D%20Incident%20AND%20created%20%3E%3D%20%22$date_from%20$hour_from%3A$minutes_from%22%20AND%20created%20%3C%3D%20%22$date_to%20$hour_to%3A$minutes_to%22%20ORDER%20BY%20created%20ASC");
} else if ($_POST['action'] == 'Zabbix') {
  header("Location: http://msc-zabbix/zabbix/zabbix.php?action=problem.view&page=1&from=$date_from+$hour_from%3A$minutes_from%3A00&to=$date_to+$hour_to%3A$minutes_to%3A18&filter_show=2&filter_application=&filter_name=&filter_severity=0&filter_inventory%5B0%5D%5Bfield%5D=type&filter_inventory%5B0%5D%5Bvalue%5D=&filter_evaltype=0&filter_tags%5B0%5D%5Btag%5D=&filter_tags%5B0%5D%5Boperator%5D=0&filter_tags%5B0%5D%5Bvalue%5D=&filter_show_tags=3&filter_tag_name_format=0&filter_tag_priority=&filter_set=1");
} else {
 echo "Введите корректные данные!";
}
?>
