<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Huiswerk opdrachten inplannen</title>
    </head>
    <body>
        <form action="opslaan.php" method="post">
            <p>
                Hier kunt u huiswerk opdrachten inplannen
            </p>
            <p>
                Begindatum: <br>
                <input name="begindatum" type="date" tabindex="1">
            </p>
            <p>
                Inleverdatum: <br>
                <input name="inleverdatum" type="date" tabindex="1">
            </p>
            <p>
                Vak: <br>
                <input name="vak" type="text" size="40" tabindex="2">
            </p>
            <p>
                Titel: <br>
                <input name="titel" type="text" size="40" tabindex="3">
            </p>
            <p>
                Beschrijving: <br>
                <input name="beschrijving" type="text" size="140" tabindex="4">
            </p>
            <p>
                <input type="submit" name="submit" value="Plan in" title="inplannen" tabindex="5">
            </p>
        </form>
    </body>
</html>
