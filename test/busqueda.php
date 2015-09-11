<?php

$mysql_server = 'localhost';
$mysql_login = 'root';
$mysql_password = 'udc';
$mysql_database = 'employees';

mysql_connect($mysql_server, $mysql_login, $mysql_password);
mysql_select_db($mysql_database);

$req = "SELECT name "
    ."FROM mytable "
    ."WHERE name LIKE '%".$_REQUEST['term']."%' "; 

$query = mysql_query($req);

while($row = mysql_fetch_array($query))
{
    $results[] = array('label' => $row['name']);
}

echo json_encode($results);