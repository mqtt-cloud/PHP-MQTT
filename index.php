<?php

require("lib/phpMQTT.php");

$server  = "192.168.1.6"; //Server ip address
$port  = 10097;
$username = "test";  //username
$password = "123456";  //password 
$client_id = "Client-MQTT";

$mqtt = new phpMQTT($server, $port, $client_id);
if( $mqtt->connect(true, NULL, $username, $password) ) {
 echo 'connect';
}


$mqtt->close();


?>