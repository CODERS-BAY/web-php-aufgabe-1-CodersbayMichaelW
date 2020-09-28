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
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung7.php">Nr7</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung8.php" class="active-page">Nr8</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Exercise Eight</h1>
        <!-- <section class="game">
            <div class="player">
                <p>User:</p>
                <p>0</p>
            </div>

            <div class="Ai">
                <p>Ai:</p>
                <p>0</p>
            </div>

            <button type="button" >Roll</button>
        </section> -->


        <section class="game">
            <?php
            $pointsPlayer = 0;
            $pointsAi = 0;
            while ($pointsPlayer <= 25 && $pointsAi <= 25) {
                $pointsPlayer += rand(1,6);
                $pointsAi += rand(1,6);
            }

            echo '<div class="player">';
                echo '<p>User:</p>';
                echo '<p>' . $pointsPlayer . '</p>';
            echo '</div>';

            echo '<div class="Ai">';
                echo '<p>Ai:</p>';
                echo '<p>' . $pointsAi . '</p>';
            echo '</div>';

            $winner = ($pointsPlayer > $pointsAi) ? "User has won!" : (($pointsAi > $pointsPlayer) ? "Ai has won." : "Both won.");

            echo '<div class="winner">';
                echo '<h2>Winner</h2>';
                echo "<p>" . $winner . "</p>";
            echo '</div>';
            ?>
        </section>

    </main>

    <footer>
    </footer>

    <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>