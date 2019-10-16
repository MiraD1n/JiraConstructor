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
<?php include_once "footer.php";?>
