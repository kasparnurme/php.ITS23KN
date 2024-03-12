<!doctype html>
<html lang="et">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
.navbar-brand{
    font-weight:600;
}
.navbar-nav a{
    font-weight:600;
}
        </style>
    </head>
    <body>
<div class="container-fluid banner">
    <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Kaspar Nurme</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" aria-current="page" href="#">AVALEHT</a>
        <a class="nav-link" href="#">MINUST</a>
        <a class="nav-link" href="#">KONTAKT</a>
        <a class="nav-link" href="admin.php">ADMIN</a>
      </div>
    </div>
  </div>
</nav>

<h1>Postituse lisamineasasas</h1>

<form action="" method="post" enctype="multipart/form-data">
    <label for="pealkiri">Postituse pealkiri</label>
    <input type="text" name="pealkiri" required><br>

    <label for="sisu">Postituse sisu</label>
    <textarea name="sisu" cols="40" rows="5"></textarea><br>

    <input class="btn btn-success" type="submit" value="Postita">
</form>

<?php
if (isset($_POST['submit'])) {
    // Get form data
    $pealkiri = $_POST["pealkiri"];
    $sisu = $_POST["sisu"];

    // Create a new line for the "postitused.txt" file
    $rida = "$pealkiri|$sisu\n";

    // Open the file in append mode and write the new line
    file_put_contents("postitused.txt", $rida, FILE_APPEND | LOCK_EX);

    // Optional: Redirect to a different page (KT.php) or do any other post-processing
    header("Location: KT.php");
    exit();
}
?>

</div>
        



        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
