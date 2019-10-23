<?php include_once "header.php";?>
<!--
<form action="https://sd.finam.ru/issues/">
<p><b>Type:</b><Br>
<input type="radio" name="jql" value="Incident">Incident</br>
<input type="radio" name="jql" value="cf[21001] = IT-22852">RFC2</br>
<input type="radio" name="jql" value="RFC">RFC</br>
<input type="radio" name="jql" value="Release">Release</br>
</p>
<input type="submit">
</form>
<form action="">
<p><b>Последние инциденты:</b><Br>
<input type="hidden" type="text" name="jql" value="cf[21001]" /><br />
<input type="text" name="text" value="777"></br>
</p>
<input type="submit">
</form>
<p>*открытые алерты по имени сервиса <p>
<p>*открытые и переданные по имени сервиса <p>
<p>*алерты за промежуток времени <p>
-->


<!--  <form action = 'https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%%20after%<?php $_POST['date_from'];?>' method="post"> -->
  <form action = "make_url.php" method="post">
<!--   work but comment       <label for="date_from">От: </label> -->
<!-- <input type="datetime-local" id="date_from" name="date_from"/> <input type="datetime-local" id="date_to" name="date_to"/><br />   -->

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
Dates from: <input type="date" id="date_from" name="date_from"/>

Hours from: <select id="hour_to" name="hour_to">
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
Mints from: <select id="minutes_to" name="minutes_to">
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
Dates to: &nbsp; <input type="date" id="date_to" name="date_to"/><br />

          <button type="submit">Отправить</button>
  </form>

<?php include_once "footer.php";?>


<!--Must be: https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%202019-10-15%20after%202019-10-14 -->
