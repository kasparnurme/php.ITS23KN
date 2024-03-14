<?php include("header.php"); ?>


<?php include("nav.php"); ?>

<div class="container">
<h1>Postituse lisamine</h1>
<?php
    if (isset($_GET['ok'])) {
        echo '<div class="alert alert-success" role="alert">
        Postituse lisamine õnnestus!
     </div>
        ';
    }
?>

<form action="" method="get" enctype="multipart/form-data">
    <label for="pealkiri">Postituse pealkiri</label><br>
    <input type="text" name="pealkiri" required><br>

    <label for="sisu">Postituse sisu</label><br>
    <textarea name="sisu" cols="40" rows="5" required></textarea><br>
    <input type="hidden" name="ok">
    <input class="btn btn-success" type="submit" name="submit" value="Postita">
</form>
</div>
<?php
    if (isset($_GET['submit'])) {
        $allikas = 'postitused.txt'; 
        $minu_fail = fopen($allikas, 'a');
        $pealkiri = $_GET["pealkiri"];
        $sisu = $_GET["sisu"];
        $rida = "$pealkiri|$sisu\n";
        fwrite($minu_fail, $rida);
        
        fclose($minu_fail);
    }





// if (isset($_POST['submit'])) {
//     // Get form data
//     $pealkiri = $_POST["pealkiri"];
//     $sisu = $_POST["sisu"];

//     // Create a new line for the "postitused.txt" file
//     $rida = "$pealkiri|$sisu\n";

//     // Open the file in append mode and write the new line
//     file_put_contents("postitused.txt", $rida, FILE_APPEND | LOCK_EX);

//}
?>

</div>
        

<?php include("footer.php"); ?>