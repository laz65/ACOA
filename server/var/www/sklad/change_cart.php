<?php

$connection = pg_connect("dbname=sklad user=sklad password=12345");

$data = explode('-',$_POST[dn]);
$date_n = $data[2].$data[1].$data[0];
if(isset($_POST['tb'])) // если выбран черный картридж
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ltb], $_POST[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['tc'])) // если выбран  картридж
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ltc], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['tm'])) // если выбран картридж
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ltm], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['ty'])) // если выбран  картридж
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[lty], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['tcl'])) // если выбран
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ltcl], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['db'])) // если выбран 
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ldb], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['dc'])) // если выбран 
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ldc], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['dm'])) // если выбран
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ldm], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}

if(isset($_POST['dy'])) // если выбран 
{
	if (pg_query($connection, "insert into changelist (yy, invnumber, modelprint, cart, workerid, pidrozdilid) values ($date, $_POST[invn], $_POST[printr], $_POST[ldy], $db2[rabotniki_id], $_POST[centry]);")) echo "Картридж  toner B добавлено <br>";
	else echo "Картридж  toner B  не вдалося добавити <br>";	
}
*/
echo "<br>Проверка работы макроса<br>";

?>


<?php	
pg_close($connection); 
?>