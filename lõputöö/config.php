<?php
$kasutaja = "kaspar";
$dbserver = "localhost";
$andmbebass = "restoranid";
$pw = "Passw0rd";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmbebass);

if (!$yhendus) {
    die ("Sa jälle ebaõnnestusid");
}
?>