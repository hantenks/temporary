<?php
// testing with git
require ('sql_connect.php');
$username=mysql_escape_string($_GET['uname']);
$vsername=mysql_escape_string($_GET['vname']);

$sql = "SELECT questionnumber, stronglyagree, agree, neutral, disagree, stronglydisagree FROM $username";
$result = mysql_query($sql);
echo "overall feedback till now of ". "$username". "of".  "$vsername" ."<br>" ;

echo "<table>";
if (mysql_num_rows($result) > 0) {
    // output data of each row
	<table style="width:100%">
  <tr>
    <th>Question No.</th>
    <th>Strongly Agree</th>
	<th>Agree</th>
	<th>Neutral</th>
	<th>Disagree</th>
	<th>Strongly Disagree</th>
  </tr>
    while($row = mysql_fetch_assoc($result)) {
        <tr>
		<td>$row["questionnumber"]</td>
        <td>$row["stronglyagree"]</td> 
        <td>$row["agree"]</td>
		<td>$row["disagree"]</td> 
        <td>$row["stronglydisagree"]</td> .
		</tr>
    }
        } else {
    echo "0 results";
}

</table>
?>
