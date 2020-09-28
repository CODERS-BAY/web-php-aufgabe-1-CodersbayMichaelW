<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-Exercise-Two</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <nav class="navigation">
            <button class="navbutton" aria-expanded="false" aria-controls="navi-liste">
                ☰ Menu
            </button>
            <ul id="navi-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung1.php">Nr1</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung2.php" class="active-page">Nr2</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung3.php">Nr3</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung4.php">Nr4</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung5.php">Nr5</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung6.php">Nr6</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung7.php">Nr7</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung8.php">Nr8</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Exercise Two</h1>

        <section>
            <form action="uebung2.php" method="post">
                <p>Number: <input name="number"></input></p>
                <!-- <input type="submit" value="Calculate"></input> -->
                <button type="submit">Calculate</button>
            </form>
        </section>

        <?php
        if (isset($_POST["number"])) {
            if (is_numeric($_POST["number"])) echo "<p>Square: " . ($_POST["number"] * $_POST["number"]) . "</p>";
        }

        ?>

    </main>

    <footer>
    </footer>

    <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>