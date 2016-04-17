<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con=mysql_connect("localhost","root","");
				if(!$con)
				die(mysql_error()."cannot connect to DB");
				mysql_select_db("musicfanista",$con);
				
				$result=mysql_query("select * from audios where m_name like '".$q."'");
				if(!$result) die(mysql_error());
				


echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>

</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['m_name'] . "</td>";
    echo "<td>" . $row['song'] . "</td>";
    echo "<td>" . $row['singer'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>