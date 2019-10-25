<?php include_once "header.php";?>

*** Инциденты за период времени в JIRA ***
<form action = "goto.php" method="post">
Hours from: <select id="hour_from" name="hour_from">
  <option>00</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
</select>
Mints from: <select id="minutes_from" name="minutes_from">
  <option>00</option>
  <option>05</option>
  <option>10</option>
  <option>15</option>
  <option>20</option>
  <option>25</option>
  <option>30</option>
  <option>35</option>
  <option>40</option>
  <option>45</option>
  <option>50</option>
  <option>55</option>
</select>
Dates from: <input type="date" id="date_from" name="date_from"/>

Hours to: &nbsp; <select id="hour_to" name="hour_to">
  <option>00</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
</select>
Minutes to: <select id="minutes_to" name="minutes_to">
  <option>05</option>
  <option>10</option>
  <option>15</option>
  <option>20</option>
  <option>25</option>
  <option>30</option>
  <option>35</option>
  <option>40</option>
  <option>45</option>
  <option>50</option>
  <option>55</option>
</select>
Dates to: &nbsp; <input type="date" id="date_to" name="date_to"/>
<input type="submit" name="action" value="Jira" />
<input type="submit" name="action" value="Zabbix" />
</form>

*** Связанные события с этим обьектом ***
<form action = "object_incidents.php" method="post">
Вставить "Key" обьекта
IT-<input type="text" id="object" name="object"/><button type="submit">Отправить</button>
</form>
<p><img src="key.jpg" alt="key"></p>
<?php include_once "footer.php";?>


<!--Must be: https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%202019-10-15%20after%202019-10-14 -->
