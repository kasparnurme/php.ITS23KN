<?php include("header.php"); ?>
<div class="container-fluid banner">
<?php include("nav.php"); ?>
<div class="row">
    <div class="col text-center pealkiri">

    <div class="p-5 mb-4">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Praktika Maltal</h1>
        <p>aasfasfff</p>

      </div>
    </div>

    </div>
</div>
</div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
<?php
$f="postitused.txt";
$minufail = fopen($f,'r');
while ($rida = fgets($minufail)) {
    $tykid=explode('|',$rida);
    
        echo "<h1 class='mt-3 posth'>$tykid[0]</h1>";
        echo "<p>$tykid[1]</p>";
        echo "<hr>";
    
  }






?>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="#" class="btn nupp">Vanemad postitused 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg>
</a>
</div>
 


        </div>
        <div class="col-sm-3"></div>
    </div>
<div class="row">
    <div class="col text-center mt-5">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
<p>Kaspar Nurme</p>
    </div>
</div>
        
<?php include("footer.php"); ?>
