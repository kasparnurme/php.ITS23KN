<?php
$kasutaja = "kaspar";
$dbserver = "localhost";
$andmbebass = "muusikapood";
$pw = "Vidruka04";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmbebass);

if (!$yhendus) {
    die ("Sa jälle ebaõnnestusid");
}
?>