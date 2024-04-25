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
    </head>

    <body>

    <h1>Restoranide nimekiri</h1>
    <!-- Restoranide nimekiri kuvatakse siin -->
    <div id="restaurantList">
        <!-- Siia tuleb dünaamiliselt lisada restoranide nimekiri -->
    </div>
    <button id="previousPage">&lt; Eelmised</button>
    <button id="nextPage">Järgmised &gt;</button>
    <br>
    <label for="search">Otsi restorani:</label>
    <input type="text" id="search" name="search">
    <!-- Tabeli päis -->
    <table id="restaurantTable">
        <thead>
            <tr>
                <th onclick="sortTable(0)">Nimi</th>
                <th onclick="sortTable(1)">Asukoht</th>
                <th onclick="sortTable(2)">Keskmine hinne</th>
                <th onclick="sortTable(3)">Hinnanute arv</th>
            </tr>
        </thead>
        <tbody>
            <!-- Siia tuleb dünaamiliselt lisada restoranide read -->
        </tbody>
    </table>

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
