<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-Exercise-One</title>
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
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung1.php" class="active-page">Nr1</a></li>
                <li><a href="http://127.0.0.1/web-php-aufgabe-1/uebung/uebung2.php">Nr2</a></li>
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
        <h1>Exercise One</h1>

        <?php
        $articelOne = 22.50;
        $articelTwo = 12.30;
        $articelThree = 5.20;

        $netTotatl = $articelOne + $articelTwo + $articelThree;
        $articelOneWithTaxes = $articelOne + ($articelOne * 0.2);
        $articelTwoWithTaxes = $articelTwo + ($articelTwo * 0.2);
        $articelThreeWithTaxes = $articelThree + ($articelThree * 0.2);

        $grossAmount = $articelOneWithTaxes + $articelTwoWithTaxes + $articelThreeWithTaxes;

        echo "<p>Article One: " . number_format($articelOne, 2) . "&#8364</p>";
        echo "<p>Article Two: " . number_format($articelTwo, 2) . "&#8364</p>";
        echo "<p>Article Three: " . number_format($articelThree, 2) . "&#8364</p>";
        echo "<p>---------------------------------</p>";
        echo "<p>Article One with Taxes: " . number_format($articelOneWithTaxes, 2) . "&#8364</p>";
        echo "<p>Article Two with Taxes: " . number_format($articelTwoWithTaxes, 2) . "&#8364</p>";
        echo "<p>Article Three with Taxes: " . number_format($articelThreeWithTaxes, 2) . "&#8364</p>";
        echo "<p>---------------------------------</p>";
        echo "<p>Gross Amount: " . number_format($grossAmount, 2) . "&#8364</p>";
        ?>



    </main>

    <footer>
    </footer>

    <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>