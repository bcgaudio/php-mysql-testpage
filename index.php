<html>
 <head>
  <title>PHP Test page with MySQL DB</title>
 </head>
 <body>

<?php

$txt1 = "PHP-MySQL Sample code";
echo "<h2>$txt1</h2>";



$servername = "localhost";
$username = "petsadmin";
$password = "password";
$dbname = "pets";

$link=mysql_connect($servername,$username,$password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db_selected=mysql_select_db($dbname,$link);
if (!$db_selected) {
    die ('Can\'t use database: ' . mysql_error());
}

$sql = "SELECT name,owner,species,sex,birth,death FROM pet;";
$results=mysql_query($sql,$link);

if (mysql_num_rows($results) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}


while ($row = mysql_fetch_assoc($results)) {
echo $row["name"]," ";
echo $row['owner']," ";
echo $row['species']," ";
echo $row['sex']," ";
echo $row['birth']," ";
echo $row['death'],"<br>";
}

mysql_free_result($result);
?>
 </body>
</html>
