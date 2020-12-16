<?php
if(isset($_GET['groep']))
{
    $groep = $_GET['groep'];
    echo "De geselecteerde groep is : ".$groep;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Rekensite</title>
    <link rel="stylesheet" href="http://localhost/desplinter/css/plusmin.css">
</head>
<body>
<div id="head">
    <div class="header">
        <img src="http://localhost/desplinter/image/logo.jpg" alt="logo" />
    </div>

    <div id="desplinter">
        <h1>De Splinter</h1>
    </div>
</div>
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="http://localhost/desplinter/informatie.html">Informatie</a></li>
    <li><a href="http://localhost/desplinter/php/groep.php">Oefeningen</a></li>
    <li><a href="http://localhost/desplinter/contact.html">Contact</a></li>
</ul>
<hr/>

<!------------------------------------------------------------------------------------>

<div class="banaan">
    <div onclick="location.href= ''" id="plus" class="tekst">
        <h2>PLUS</h2>
        <h1 class="var">+</h1>
    </div>

    <div onclick="location.href= ''" id="min" class="tekst">
        <h2>MIN</h2>
        <h1 class="var">-</h1>
    </div>

    <div onclick="location.href= ''" id="delen" class="tekst">
        <h2>DELEN</h2>
        <h1 class="var">:</h1>
    </div>

    <div onclick="location.href= ''" id="keer" class="tekst">
        <h2>KEER</h2>
        <h1 class="var">x</h1>
    </div>

    <div onclick="location.href= ''" id="overzicht" class="tekst">
        <h2>OVERZICHT</h2>
        <h1 class="var">=</h1>
    </div>

    <div onclick="location.href= ''" id="niks" class="tekst">
        <h1 class="var">.</h1>
    </div>


</body>
</html>