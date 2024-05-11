<?php

// Ühendame andmebaasiga
include("config.php");


// Vaatame, milline leht on praegu avatud
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$per_page = 10;
$start = ($current_page - 1) * $per_page;

// Küsime 10 söögikohta andmebaasist, alustades õigest kohast
$sql = "SELECT * FROM restoranid LIMIT $start, $per_page";
$tulemus = $yhendus->query($sql);
?>

!<!doctype html>
<html lang="en">
    <head>
        <title>Restoranide hindamine</title>
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
        /* Tabeli ja otsingu stiilid */
        .container {
            margin-top: 20px;
        }
        
        .nupp1 {
            margin-top: 5px;
        }

        .table-container {
            width: 80%;
            margin: 0 auto;
        }

        .lk_vahetamine {
            display: flex;
            justify-content: end; 
            margin-top: 20px;
        }

        .search-container {
            width: 80%;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .search-input {
            width: 100%;
        }
    </style>

    </head>

    <body>
    <div class="container">
        <h1 class="pealkiri">Valige asutus mida hinnata</h1>

        <div class="search-container">
            <form method="GET" action="hinnang.php">
                <div class="form-group">
                    <label for="search">Otsi restorani:</label>
                    <input type="text" class="form-control search-input" id="search" name="restorani_nimi" placeholder="Sisesta restorani nimi">
                </div>
                <button type="submit" class="btn btn-primary nupp1">Otsi</button>
            </form>
        </div>

        <div class="table-container">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Firma</th>
                        <th>Asukoht</th>
                        <th>Keskmine hinnang</th>
                        <th>Hinnanguid kokku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($tulemus->num_rows > 0) {
                        while ($row = $tulemus->fetch_assoc()) {
                            echo "<tr onclick='lisahinnang(" . $row["id"] . ")'>";
                            echo "<td>" . $row["firma"] . "</td>";
                            echo "<td>" . $row["asukoht"] . "</td>";
                            echo "<td>" . $row["keskmine_hinnang"] . "</td>";
                            echo "<td>" . $row["hinnanguid_kokku"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Andmed puuduvad</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="lk_vahetamine">
            <div class="btn-group">
                <?php if ($current_page > 1): ?>
                    <a href="?page=<?php echo $current_page - 1; ?>" class="btn btn-primary">Eelmised</a>
                <?php endif; ?>
                <?php if ($tulemus->num_rows == $per_page): ?>
                    <a href="?page=<?php echo $current_page + 1; ?>" class="btn btn-primary">Järgmised</a>
                <?php endif; ?>
            </div>
        </div>
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
