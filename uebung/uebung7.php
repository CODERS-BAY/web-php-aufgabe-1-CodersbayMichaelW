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
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung6.php">Nr6</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung7.php" class="active-page">Nr7</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung8.php">Nr8</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Exercise Seven</h1>


        <?php
        echo "<section>";
            // 1. column
            echo '<div class="columns">';
            for ($i = 0; $i < 5; $i++) {
                echo "<p>" . (13 + 4*$i) . "</p>";
            }
            echo "</div>";

            // 2. column
            echo '<div class="columns">';
            for ($i = 0; $i < 7; $i++) {
                echo "<p>" . (2 - 0.5*$i) . "</p>";
            }
            echo "</div>";

            // 3. column
            echo '<div class="columns">';
            for ($i = 0; $i < 5; $i++) {
                echo "<p>" . (2000 + 1000*$i) . "</p>";
            }
            echo "</div>";

            // 4. column
            echo '<div class="columns">';
            for ($i = 0; $i < 5; $i++) {
                echo "<p>Z" . (5 + 2*$i) . "</p>";
            }
            echo "</div>";

            // 5. column
            echo '<div class="columns">';
            for ($i = 0; $i < 3; $i++) {
                echo "<p>a</p>";
                echo "<p>b" . (1 + 1*$i) . "</p>";
            }
            echo "</div>";

            // 6. column
            echo '<div class="columns">';
            for ($i = 0; $i < 3; $i++) {
                if ($i != 0) {
                    echo "<p>c" . $i . "2</p>";
                    echo "<p>c" . ($i) . "3</p>";
                }
                // first iteration only one number
                else {
                    echo "<p>c". 2 ."</p>";
                    echo "<p>c" . 3 . "</p>";
                }
            }
            echo "</div>";

            // 7. column
            $dumbvariable = 3;
            echo '<div class="columns">';
            for ($i = 0; $i < 7; $i++) {
                if ($i == 3){
                    $dumbvariable = 5;
                }
                echo "<p>" . (4*($i+$dumbvariable) + 1) . "</p>";
            }
            echo "</div>";

        echo "</section>";
        ?>

    </main>

    <footer>
    </footer>

    <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>