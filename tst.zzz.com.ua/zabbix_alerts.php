<?php
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$hour_from = $_POST['hour_from'];
$hour_to = $_POST['hour_to'];
$minutes_from = $_POST['minutes_from'];
$minutes_to = $_POST['minutes_to'];

header("Location: http://msc-zabbix/zabbix/zabbix.php?action=problem.view&page=1&from=$date_from+$hour_from%3A$minutes_from%3A00&to=$date_to+$hour_to%3A$minutes_to%3A18&filter_show=2&filter_application=&filter_name=&filter_severity=0&filter_inventory%5B0%5D%5Bfield%5D=type&filter_inventory%5B0%5D%5Bvalue%5D=&filter_evaltype=0&filter_tags%5B0%5D%5Btag%5D=&filter_tags%5B0%5D%5Boperator%5D=0&filter_tags%5B0%5D%5Bvalue%5D=&filter_show_tags=3&filter_tag_name_format=0&filter_tag_priority=&filter_set=1");

?>
