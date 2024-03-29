<?php include("KTconfig.php"); ?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drooniralli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <h1>Drooniralli</h1><br>
      <H2>Päring 1</H2>
      <?php
       $paring = "SELECT * FROM drooniralli LIMIT 10";
       print_r($paring);
      ?>

      <?php
        $paring = "SELECT * FROM drooniralli LIMIT 10";
        $valjund = mysqli_query($yhendus, $paring);
          echo'<table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>NIMI</th>
                <th>AEG</th>
                <th>MUDEL</th>
                <th>ASUKOHT</th>
              </tr>
            </thead>';
        while($rida = mysqli_fetch_assoc($valjund)){
          echo'<tr>
                <td>'.$rida["id"].'</td>
                <td>'.$rida["nimi"].'</td>
                <td>'.$rida["aeg"].'</td>
                <td>'.$rida["mudel"].'</td>
                <td>'.$rida["asukoht"].'</td>
              </tr>';
        }
        echo'</tbody>
        </table>';
      ?>

      <h2>Päring 2</h2>
      <?php 
      $paring = "SELECT nimi, aeg, asukoht, mudel FROM drooniralli WHERE asukoht = 'Haapsalu' AND mudel = 'Model 500' ORDER BY aeg";
      print_r($paring);
      ?>

      <?php
        $paring ="SELECT nimi, aeg, asukoht, mudel FROM drooniralli WHERE asukoht = 'Haapsalu' AND mudel = 'Model 500' ORDER BY aeg";
        $valjund = mysqli_query($yhendus, $paring);
         echo '<table class="table">
                <thead>
                  <tr>
                    <th>Nimi</th>
                    <th>Aeg</th>
                    <th>Mudel</th>
                    <th>Asukoht</th>
                  </tr>
                </thead>
                <tbody>';
        while($rida = mysqli_fetch_assoc($valjund)){
          echo '<tr>
                  <td>'.$rida["nimi"].'</td>
                  <td>'.$rida["aeg"].'</td>
                  <td>'.$rida["mudel"].'</td>
                  <td>'.$rida["asukoht"].'</td>
                </tr>';
        }
        echo '</tbody>
              </table>';
      ?>

      <h2>Päring 3</h2>
      <?php 
      $paring = "SELECT mudel, COUNT(*) AS võistluste_arv FROM drooniralli GROUP BY mudel";
      print_r($paring);
      ?>

      <?php 
      $paring = "SELECT mudel, COUNT(*) AS võistluste_arv FROM drooniralli GROUP BY mudel";
      $valjund = mysqli_query($yhendus, $paring);
        echo '<table class="table">
                <thead>
                  <tr>
                    <th>Mudel</th>
                    <th>Võistluste Arv</th>
                  </tr>
                </thead>
                <tbody>';
      while($rida = mysqli_fetch_assoc($valjund)){
        echo '<tr>
                <td>'.$rida["mudel"].'</td>
                <td>'.$rida["võistluste_arv"].'</td>
              </tr>';
      }
      echo '</tbody>
            </table>';
      ?>

      <h2>Päring 4</h2>
      <?php 
      $paring = "SELECT nimi FROM drooniralli ORDER BY rand() LIMIT 3";
      print_r($paring);
      ?>

      <?php 
      $paring = "SELECT nimi FROM drooniralli ORDER BY rand() LIMIT 3";
      $valjund = mysqli_query($yhendus, $paring);
      $koht= 1;
        echo '<table class="table">
                <thead>
                  <tr>
                    <th>Nimi</th>
                    <th>Koht</th>
                  </tr>
                </thead>
                <tbody>';
      while($rida = mysqli_fetch_assoc($valjund)){
        echo '<tr>
                <td>'.$rida["nimi"].'</td>
                <td>'.$koht.'</td>
              </tr>';
              $koht++;
      }
      echo '</tbody>
            </table>';
      ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>