<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/styles.css" rel="stylesheet" type="text/css">



<link href="css/styles.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<style type="text/css">
<!--
.стиль5 {color: #FFFFFF; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}
.стиль10 {font-size: 12px; }
.стиль12 {color: #FFFFFF; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.стиль22 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-small;
	color: #FFCC00;
	font-weight: bold;
}
-->
</style>
</head>

<body class="body">
<?php 
$user="asterisk";
$pass="12345";
$connection = pg_connect ("dbname=asterisk user=$user password=$pass");
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="100%" align="left" valign="top">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      	<tr>
        	<td align="left" valign="top" class="logobg"><img src="images/logo.jpg" alt="Логотип сайта" width="100%" height="100"></td>
        </tr>
    	</table>
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      	<tr>
					<td width="10" bgcolor="#FFCC00">&nbsp;</td>
       	  <td align="center" valign="top" bgcolor="#336633">
					<br>
						<table width="150" height="148" border="0" cellpadding="0" cellspacing="1" class="ref">
    					<tr> 
      					<td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="index.php" title="Главная страница сайта" class="стиль5">Головна</a></h3></td>
	   					</tr>
    					<tr>
                          <td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="spiski.php" class="стиль5">Списки</a></h3></td>
  					  </tr>
    					<tr>
                          <td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="tabread.php" class="стиль5">Перегляд об'ектів</a></h3></td>
  					  </tr>
    					<tr>
                          <td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="tabwrite.php" class="стиль5">Додавання об'ектів </a></h3></td>
  					  </tr>
    					<tr>
    					  <td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="calendar.php" class="стиль5">Календар</a></h3></td>
  					  </tr>
    					<tr>
    					  <td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="povidom.php" class="стиль5">Повідомлення</a></h3></td>
  					  </tr>
    					<tr>
   					  <td height="20" align="center" class="стиль5"><h3 class="стиль10"><a href="listcsv.php" class="стиль5">Звіти</a></h3></td>
  					  </tr>
			  </table>
			<p>&nbsp;</p>
			<p><span class="стиль12"><a href="setting.php" class="стиль12">Налаштування</a></span>            
			<p><span class="стиль12"><br>
			  </span>            <span class="стиль22"><a href="help.php" class="стиль22">Допомога</a></span><span class="стиль12"><br>
		      </span><br>
			  <br>
			  <br>		  
          </td>
					<td width="10" align="left" valign="top" bgcolor="#FFCC00">&nbsp;</td>
    			<td width="2" bgcolor="#336633"><img src="images/xnew.gif" alt="Заработок на платных опросах" width="2" height="500"></td>
        	<td width="100%" align="left" valign="top" bgcolor="#FFFFFF">
        		<table border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
            		<td width="100%"><img src="images/n.gif" alt="Здоровье детей" width="10" height="10"></td>
            	</tr>
        		</table>
        		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
          		<tr>
            		<td width="10" align="left" valign="top"><img src="images/n.gif" alt="Новый сайт" width="10" height="10"></td>
            		<td width="100%" align="left" valign="top">
									<table class="refhome" width="100%" bgcolor="#336633" border="0" cellspacing="1" cellpadding="0">
        						<tr>
          						<td bgcolor="#FFFFFF" align="center" nowrap><a href="index.php" title="Главная страница сайта" class="ref"><b>Головна</b></a></td>
          						<td align="center" nowrap bgcolor="#FFFFFF"><a href="spiski.php" title="Главная страница сайта" class="ref"><b>Списки</b></a></td>
          						<td align="center" nowrap bgcolor="#FFFFFF"><a href="tabread.php" class="ref"><b>Перегляд об'ектів</b></a><a href="tabread.php" class="ref"><b> </b></a></td>
          						<td align="center" nowrap bgcolor="#FFFFFF"><a href="tabwrite.php" class="ref"><b> Додавання об'ектів </b></a></td>
        						<td align="center" nowrap bgcolor="#FFFFFF"><a href="calendar.php" class="ref"><b> Календар </b></a></td>
        						<td align="center" nowrap bgcolor="#FFFFFF"><a href="povidom.php" class="ref"><strong>Повідомлення</strong></a></td>
        						</tr>
      						</table>	
									<br>
									<table width="100%">
                    <tr>
                      <td align="right">
											<div align="justify" class="text">
											  <!-- InstanceBeginEditable name="EditRegion3" -->
<?php


if($pidr=$_GET[pidr])
{
		$result=pg_query($connection, "select * from pidr where id = $pidr");
		$db=pg_fetch_array($result);
		$objekt=$db[object];
		$tr1=$db[tr1];
		$tr2=$db[tr2];
		$tr3=$db[tr3];			
		$nomer=$db[nomer];			
}
else $pidr = 0;
if(isset($_POST[Submit]))
{
  if($_POST[del2] == 1)
  {
	  	if(pg_query($connection, "delete from pidr where id = $pidr")) echo "<br>OK DELETE"; 	
  } 
  else
  {
	$pidr = $_POST[pidr];	
	$objekt = $_POST[objekt];
	$tr1 = $_POST[tr1]; 
	$tr2 = $_POST[tr2]; 
	$tr3 = $_POST[tr3]; 
	$nomer = $_POST[nomer]; 
	if ($pidr)
	{
		if(pg_query($connection, "update pidr set object = '$objekt', tr1 = '$tr1', tr2 = '$tr2', tr3 = '$tr3', nomer = '$nomer'  where id = $pidr; ")) echo "<br>OK Update"; else echo "No Update: update pidr set object = '$objekt', tr1 = '$tr1', tr2 = '$tr2', tr3 = '$tr3', nomer = '$nomer'  where id = $pidr; ";	
	}
	else 
	{
		if(pg_query($connection, "insert into pidr (object, tr1, tr2, tr3, nomer) values ('$objekt', '$tr1', '$tr2', '$tr3', '$nomer');")) echo "<br>OK Insert";  else echo "<br> Error Insert: insert into pidr (object, tr1, tr2, tr3, nomer) values ('$objekt', '$tr1', '$tr2', '$tr3', '$nomer');"; 	
			
	}
  }
}


?>                                              
                                   
											  <p>


  
<form name="form1" method="post" action="">
  <p>&nbsp;                                                      </p>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" bgcolor="#66CCCC"><div align="center"><strong>Об'ект
            <select name="pidr" id="pidr" onChange="top.location.href = 'tabwrite.php?pidr='+this.options[this.selectedIndex].value;">
          <?php

$result2=pg_query($connection, "select * from pidr");
echo "<option value=0>Виберіть приміщення для редагування</option>";
while($db2=pg_fetch_array($result2)):
$nspi=$db2['object'] ;
$spi=$db2['id'];
if($spi == $pidr) 
{
echo "<option value='$spi' selected='selected'>$nspi</option>";
} 
else 
{
echo "<option value='$spi'>$nspi</option>";
};
endwhile;
?>
            </select>
      </strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Об'ект
      <input name="objekt" type="text" id="objekt" <?php echo "value=\"$objekt\"" ?>></td>
      <td><p>Номер
        <input name="nomer" type="text" id="nomer" <?php echo "value=\"$nomer\"" ?>>
      </p></td>
    </tr>
    <tr>
      <td> Контроль1
        <input name="tr1" type="text" id="tr1" <?php echo "value=\"$tr1\"" ?>></td>
      <td> Контроль2
        <input name="tr2" type="text" id="tr2" <?php echo "value=\"$tr2\"" ?>></td>
    </tr>
    <tr>
      <td>Контроль3
        <input name="tr3" type="text" id="tr3" <?php echo "value=\"$tr3\"" ?>>
        Видалити
      <input name="del2" type="checkbox" id="del2" value="1"></td>
      <td><input type="submit" name="Submit" value="Подтвердить"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>                                                 




<form name="form1" method="post" action="">
                                                    <p>&nbsp;                                                      </p>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" bgcolor="#66CCCC"><div align="center"><strong>Центр
        <select name="centry" id="centry" onChange="top.location.href = 'adm.php?centr='+this.options[this.selectedIndex].value;">
          <?php

$result2=pg_query($connection, "select * from centry");
echo "<option value=''>Виберіть центр для редагування</option>";
while($db2=pg_fetch_array($result2)):
$nspi=$db2['centr'] ;
if($nspi == $centr) 
{
echo "<option value='$nspi' selected='selected'>$nspi</option>";
} 
else 
{
echo "<option value='$nspi'>$nspi</option>";
};
endwhile;
?>
            </select>
      </strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Центр
        <input name="centr" type="text" id="centr" <?php echo "value=\"$centr\"" ?>></td>
      <td>Місто
        <input name="misto" type="text" id="misto" <?php echo "value=\"$misto\"" ?>></td>
    </tr>
    <tr>
      <td>Видалити
      <input name="del1" type="checkbox" id="del1" value="1"></td>
      <td><input type="submit" name="Submit2" value="Подтвердить"></td>
    </tr>
  </table>
  </form>
  

  
                                                  </p>
											  <!-- InstanceEndEditable -->
											  <p>&nbsp;</p>
											  <p>&nbsp;</p>
						</div>					  </td>
                    </tr>
                    <tr>
                      <td align="center"><table class="refhome" width="100%" bgcolor="#336633" border="0" cellspacing="1" cellpadding="0">
                        <tr>
                          <td bgcolor="#FFFFFF" align="center" nowrap><a href="index.php" title="Главная страница сайта" class="ref"><b>Головна</b></a></td>
                          <td align="center" nowrap bgcolor="#FFFFFF"><a href="spiski.php" title="Главная страница сайта" class="ref"><b>Списки</b></a></td>
                          <td align="center" nowrap bgcolor="#FFFFFF"><a href="tabread.php" class="ref"><b>Перегляд об'ектів </b></a></td>
                          <td align="center" nowrap bgcolor="#FFFFFF"><a href="tabwrite.php" class="ref"><b> Додавання об'ектів</b></a></td>
                          <td align="center" nowrap bgcolor="#FFFFFF"><a href="calendar.php" class="ref"><b> Календар </b></a></td>
                          <td align="center" nowrap bgcolor="#FFFFFF"><a href="povidom.php" class="ref"><strong>Повідомлення</strong></a></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>
									<br>				  </td>
            		<td width="10" align="left" valign="top">
            <img src="images/n.gif" alt="Новый сайт" width="10" height="10">				  </td>
          		</tr>
        		</table>		  </td>
      	</tr>
    	</table>
    	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      	<tr>
        	<td width="100%">
        <img src="images/fonbt.jpg" alt="Здоровье детей" width="100%" height="13" border="0">		  </td>
      	</tr>
    	</table>
    	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      	<tr>
        	<td width="100%">&nbsp;</td>
        	<td width="100%" align="center" nowrap class="text"><a href="mailto:olazebnyk@ukrtelecom.ua">olazebnyk@ukrtelecom.ua</a></td>
      	</tr>
    	</table>	</td>
  </tr>
</table>
<?php
pg_close ($connection);
?>
</body>
<!-- InstanceEnd --></html>