<?php include_once "header.php";?>
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


<?php include_once "footer.php";?>
