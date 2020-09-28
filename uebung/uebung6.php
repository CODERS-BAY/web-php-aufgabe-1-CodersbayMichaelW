<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-Exercise-Four</title>
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
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung2.php">Nr2</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung3.php">Nr3</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung4.php">Nr4</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung5.php">Nr5</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung6.php" class="active-page">Nr6</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung7.php">Nr7</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung8.php">Nr8</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Exercise Six</h1>

        <section>
            <form action="uebung6.php" method="post">
                <div class="benzin">
                    <p>Liters:</p>
                    <input name="liter"></input>
                </div>
                <div class="super">
                    <label for="type">Choose type: </label>
                    <select name="type">
                        <option value="N">N</option>
                        <option value="S">S</option>
                        <option value="D">D</option>
                    </select>
                </div>
                <button type="submit" >Price</button>
            </form>
        </section>

        <?php
        if (isset($_POST["liter"]) && isset($_POST["type"])) {
            echo cost();
        }

        function cost() {
            $cost = 0;
            if (is_numeric($_POST["liter"]) && $_POST["type"] == "N") {
                $cost += $_POST["liter"] * 1.35;
            }
            else if (is_numeric($_POST["liter"]) && $_POST["type"] == "S") {
                $cost += $_POST["liter"] * 1.40;
            }
            else if (is_numeric($_POST["liter"]) && $_POST["type"] == "D") {
                $cost += $_POST["liter"] * 1.10;
            }
            else {
                return "<p>Input was not correct.</p>";
            }  

            // Discount
            if ($_POST["liter"] >= 100) {
                $cost -= $cost * 0.02; 
            }

            return "<p>Tank Cost: " . number_format($cost, 2) . "&#8364</p>";
        }
        ?>

    </main>

    <footer>
    </footer>

    <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>