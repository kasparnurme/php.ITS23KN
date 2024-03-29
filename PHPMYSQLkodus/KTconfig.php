<?php
$kasutaja = "kaspar";
$dbserver = "localhost";
$andmbebass = "drooniralli";
$pw = "Passw0rd";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmbebass);

if (!$yhendus) {
    die ("Sa jälle ebaõnnestusid");
}
?>