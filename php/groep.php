<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Groep</title>
    <meta charset=utf-8>
    <meta name=description content="beschrijving">
    <meta name=keywords content="trefwoord,trefwoord">
    <link rel="stylesheet" href="http://localhost/desplinter/css/groep.css">

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

<div id="formulier">
    <h1>Vul hier je gegevens in!</h1>

        <form action="http://localhost/desplinter/php/forum.php" method="post">

            <label>Hoe heet jij: <input type="text" name="fname"></label>
            <br/>
            <label>In welke groep zit jij:
                <select name="group">
                    <option value="Je hebt geen groep gezokzen">Selecteer een groep</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </label>
            <br>
            <a href="http://localhost/desplinter/php/forum.php">
            <input type="submit" name=volgende value="volgende">

        </form>
</div>


</body>
</html>
