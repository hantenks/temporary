<?php
require ('sql_connect.php');
$ua=mysql_escape_string($_POST['a']);
$ub=mysql_escape_string($_POST['b']);
$uc=mysql_escape_string($_POST['c']);
$ud=mysql_escape_string($_POST['d']);
$ue=mysql_escape_string($_POST['e']);
$uf=mysql_escape_string($_POST['f']);
$ug=mysql_escape_string($_POST['g']);
$uh=mysql_escape_string($_POST['h']);
$ui=mysql_escape_string($_POST['i']);
$uj=mysql_escape_string($_POST['j']);
$uk=mysql_escape_string($_POST['k']);
$ul=mysql_escape_string($_POST['l']);
$um=mysql_escape_string($_POST['m']);

$sql = "UPDATE $um SET $ua=$ua+1 WHERE questionnumber = 1 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $ub=$ub+1 WHERE questionnumber = 2 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $uc=$uc+1 WHERE questionnumber = 3 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $ud=$ud+1 WHERE questionnumber = 4 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $ue=$ue+1 WHERE questionnumber = 5 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $uf=$uf+1 WHERE questionnumber = 6 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $ug=$ug+1 WHERE questionnumber = 7 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $uh=$uh+1 WHERE questionnumber = 8 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $ui=$ui+1 WHERE questionnumber = 9 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $uj=$uj+1 WHERE questionnumber = 10 ";
if(mysql_query($sql)){
  }


$sql = "UPDATE $um SET $uk=$uk+1 WHERE questionnumber = 11 ";
if(mysql_query($sql)){
  }

$sql = "UPDATE $um SET $ul=$ul+1 WHERE questionnumber = 12 ";
if(mysql_query($sql)){  

  } 
  echo "<script>
             alert('Record updated successfully'); 
             window.history.go(-1);
     </script>";

?>