<?php
$connection = mysql_connect('sql11.freemysqlhosting.net:3306', 'sql11212472', '894ENVWPt5'); //The Blank string is the password
mysql_select_db('sql11212472');

$query = "SELECT * FROM ekipa"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['<img src='Adres Obrazka' />'] . "</td><td>" . $row['Online?'] . "</td><td>" . $row['Nick'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
?>