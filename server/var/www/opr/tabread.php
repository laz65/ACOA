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
<META HTTP-EQUIV="Refresh" content ="120; URL='tabread.php'">
<?php
	if (isset($_GET[stan]))
	{
		if(pg_query($connection, "update pidr set stan = $_GET[stan] where id = $_GET[id]; ")) echo "<br>OK Update"; else echo "No Update";	
	}

?>
<table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="#0000FF">
  <tr align="center">
    <td width="8%">№ п/п</td>
    <td width="25%">Назва об'екту</td>
    <td width="10%">Телефон</td>
    <td width="16%">Напруга акк.</td>
    <td width="8%">Темп.</td>
    <td width="15%">Мережева напр.</td>
    <td width="20%">Лічильник.</td>
    <td width="17%">Час ост.перевірки</td>
    <td width="9%">Стан</td>
  </tr>
<?php
		$nom = 0;
		$result=pg_query($connection, "select * from pidr order by object;");
		while($db=pg_fetch_array($result))
		{
		$result2=pg_query($connection, "select * from kontr where nomer = '$db[nomer]' order by id desc;");//where stan > 0
		$db2=pg_fetch_array($result2);
?>
  <tr>
    <td><?php echo ++$nom; ?></td>
    <td><?php echo "$db[object]"; ?>;</td>
    <td><?php echo "$db[nomer]";  ?></td>
    <td><?php echo "$db2[ubat]"; ?></td>
    <td><?php echo $db2[temper]-50," C "; ?></td>
    <td><?php echo $db2[u220]<<2; ?></td>
    <td><?php echo ($db2[tr2] * 1000 + $db2[tr1])/10," кВт*год"; ?></td>

    <td><?php echo date( 'H\:i d\-m\-Y', $db2[vrem]); ?></td>
    <td>
                                                      <select name="stan" id="stan"  onChange="top.location.href = '?id=<?php echo $db[id];?>&stan='+this.options[this.selectedIndex].value;">
<?php

$nspi=$db[stan] ;
if($nspi == 1) 
{
 echo "<option value=1 selected='selected'>Активно</option>";
 echo "<option value=0>Вимкнено</option>";
} 
else 
{
 echo "<option value=1>Активно</option>";
 echo "<option value=0 selected='selected'>Вимкнено</option>";
};

?>
                                                      </select>
	</td>
  </tr>
<?php
		}
?>
</table>
											  <p>&nbsp;</p>
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