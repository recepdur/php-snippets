<?php

$serverName = "(local)";
$connectionInfo = array( "Database"=>"bbm473_DB");
 
/* Connect using Windows Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
     echo "Unable to connect.";
     die( print_r( sqlsrv_errors(), true));
}
 
$result = sqlsrv_query( $conn, 'select * from ogrenci');
 
while($row = sqlsrv_fetch_array($result))
{
     echo($row['ID'].' - '.$row['name']);
}
