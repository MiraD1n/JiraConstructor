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
          <label for="date_from">От: </label>
<!-- <input type="datetime-local" id="date_from" name="date_from"/> <input type="datetime-local" id="date_to" name="date_to"/><br />   -->

<select id="hour_from" name="hour_from">
  <option>12</option>
  <option>13</option>
</select>
<select id="minutes_from" name="minutes_from">
  <option>12</option>
  <option>13</option>
</select>
<input type="date" id="date_from" name="date_from"/>

<select id="hour_to" name="hour_to">
  <option>12</option>
  <option>13</option>
</select>
<select id="minutes_to" name="minutes_to">
  <option>12</option>
  <option>13</option>
</select>
<input type="date" id="date_to" name="date_to"/><br />
          <button type="submit">Отправить</button>
  </form>

<?php include_once "footer.php";?>


<!--Must be: https://sd.finam.ru/issues/?jql=status%20was%20Done%20by%20mpolischuk%20before%202019-10-15%20after%202019-10-14 -->
