<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Księgarnia</title>
    <link rel="icon" href="./image/books.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Księgarnia</h1>
    </header>
    <div class="container">
        <aside>
            <a href="./index.php" class="button-link">Strona główna</a>
            <a href="./model.php" class="button-link">Model bazy danych</a>
            <a href="./wprowadz.php" class="button-link">Wprowadź dane klienta</a>
            <a href="./wprowadz1.php" class="button-link">Wprowadź dane książki</a>
            <a href="./wyswietl.php" class="button-link">Wyświetl dane klientów oraz książek</a>
            <a href="./kasuj.php" class="button-link">Skasuj dane klienta</a>
            <a href="./kasuj1.php" class="button-link">Skasuj dane książki</a>
            <a href="./mod.php" class="button-link">Modyfikuj dane klienta</a>
            <a href="./raport.php" class="button-link">Raport ze sprzedaży</a>
            <a href="./zakupy.php" class="button-link">Zakup</a>
        </aside>
        <main>
            <form action="kasuj1.php" method="post">
                <h2>Usuń dane książki</h2>

                <div class="input-group">
                    <p>Podaj ID </p> <input type="number" name="id">
                </div>

                <br><br>
                <input type="submit" value="Wprowadź dane" class="styled-button">
                <input type="reset" value="Wyczyść formularz" class="styled-button">

                <?php
                $conn = mysqli_connect("localhost", "root", "", "ksiegarnia");
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $id = $_POST['id'];

                    if (empty($id)) {
                        echo "<h3>Proszę uzupełnić wszystkie wymagane pole.</h3>";
                    } else {
                        $sql = "DELETE FROM produkty WHERE `produkty`.`id_produkt` = $id;";
                        $result = mysqli_query($conn, $sql);
                        
                        if ($result) {
                            echo "<h3>Dane zostały usunięte pomyślnie.</h3>";
                        } else {
                            echo "<h3>Wystąpił błąd przy wprowadzaniu danych.</h3>";
                        }
                    }

                    mysqli_close($conn);
                }
                ?>
            </form>
        </main>
    </div>    
    <footer>
        <p>Wykonał Mateusz Bogacz-Drewewniak, student 2 roku Informatyki na Collegium Witelona Uczelnia Państwowa, nr.indexu: 44491. &copy Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>