<?php
include("config.php");

$restorani_nimi = "";
$restorani_id = "";

if (isset($_GET['restorani_id'])) {
    $restorani_id = $_GET['restorani_id'];

    $sql = "SELECT nimi FROM restoranid WHERE id = $restorani_id";
    $result = $yhendus->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $restorani_nimi = $row["nimi"];
    } else {
        $restorani_nimi = "Valitud restoran";
    }
} elseif (isset($_GET['restorani_nimi'])) {
    $restorani_nimi = $_GET['restorani_nimi'];

    $sql = "SELECT id FROM restoranid WHERE nimi = '$restorani_nimi'";
    $result = $yhendus->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $restorani_id = $row["id"];
    } else {
        $restorani_nimi = "Valitud restoran";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST['nimi'];
    $kommentaar = $_POST['kommentaar'];
    $hinnang = $_POST['hinnang'];

    $sql = "INSERT INTO hinnangud (nimi, kommentaar, hinnang) VALUES ('$nimi', '$kommentaar', $hinnang)";

    if ($yhendus->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'>Hinnang edukalt salvestatud</div>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Viga: " . $sql . "<br>" . $yhendus->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinnangu andmine</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .star-input {
            display: none;
        }
        .star-label {
            font-size: 30px;
            color: #ddd;
            cursor: pointer;
        }
        .star-label:hover,
        .star-label:hover ~ .star-label,
        .star-input:checked ~ .star-label {
            color: orange;
        }
        
        .container {
            margin-top: 50px;
        }
        .hinnang-box {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px; /* Fikseeritud laius */
        }
        .hinnang-info {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .hinnang-nimi {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-4">Anna hinnang restoranile: <?php echo htmlspecialchars($restorani_nimi); ?></h1>
                <form method="post" action="">
                    <input type="hidden" name="restorani_id" value="<?php echo htmlspecialchars($restorani_id); ?>">
                    <div class="form-group">
                        <label for="nimi">Sinu nimi:</label>
                        <input type="text" class="form-control" id="nimi" name="nimi" required>
                    </div>
                    <div class="form-group">
                        <label for="kommentaar">Kommentaar:</label>
                        <textarea class="form-control" id="kommentaar" name="kommentaar" required></textarea>
                    </div>
                    <div class="form-group">
                    <label for="hinnang">Hinnang (1-10):</label><br>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <input type="radio" id="hinnang_<?php echo $i; ?>" class="star-input" name="hinnang" value="<?php echo $i; ?>" required>
                        <label for="hinnang_<?php echo $i; ?>" class="star-label">&#9733;</label>
                    <?php endfor; ?>
                </div>
                    <button type="submit" class="btn btn-primary">Saada hinnang</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-4">Teiste hinnangud</h1>
                <?php
    
                // Küsime kõik hinnangud andmebaasist
                $sql = "SELECT * FROM hinnangud";
                $result = $yhendus->query($sql);

                // Kui hinnanguid leiti, kuvame need
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='hinnang-box mx-auto'>"; // Horisontaalselt keskendatud kast
                        echo "<div class='hinnang-info'>";
                        echo "<span class='hinnang-nimi'>" . $row['nimi'] . "</span> (" . $row['hinnang'] . "/10)";
                        echo "</div>";
                        echo "<div class='hinnang-kommentaar'>" . $row['kommentaar'] . "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p class='text-center'>Teiste hinnanguid ei leitud.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        var starElements = document.querySelectorAll('.star-label');
        for (var i = 0; i < starElements.length; i++) {
            starElements[i].addEventListener('click', function() {
                var selectedStars = Array.from(starElements).indexOf(this) + 1;
                var reversedStars = 11 - selectedStars;
                console.log('Valitud tärnide arv (vastupidine):', reversedStars);
            });
        }
    </script>
  </body>
</html>

<?php
$yhendus->close();
?>