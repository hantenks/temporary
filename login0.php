 <?php
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['uname']);
$password=mysql_escape_string($_POST['pass']);
if (!$_POST['uname'] | !$_POST['pass'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='login1.html'
        </SCRIPT>");
exit();
     }
$sql= mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
$sql1= mysql_query("SELECT * FROM `teachers` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{ while($row = mysql_fetch_assoc($sql)){
$temp = $row["BRANCH"];                    }
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='31.php?uname=$temp'
        </SCRIPT>");

exit();
}
else if(mysql_num_rows($sql1) > 0)
{ while($row = mysql_fetch_assoc($sql1)){
$temp = $row["subject"];
$temp2= $row["username"];                   }
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='teach.php?uname=$temp&vname=$temp2'
        </SCRIPT>");

exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='login1.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>