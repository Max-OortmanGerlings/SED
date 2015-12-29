<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Opdrachten verwijderen</title>
    </head>
    <body>
        <?php
            try {
                $db = new PDO('mysql:host=localhost;dbname=sed', 'root', '');
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            $sql = "SELECT * FROM werkzaamheden WHERE nummer = $_POST[wijzig]";
            $resultaat = $db->query($sql);
            foreach($resultaat as $row){
                $nummer = $row['nummer'];
                $begindatum = $row['begindatum'];
                $inleverdatum = $row['inleverdatum'];
                $vak = $row['vak'];
                $titel = $row['titel'];
                $beschrijving = $row['beschrijving'];
            }
            echo "<form method='post' action='wijzigendefinitief.php'>";
            echo "<input type='hidden' name='nummer' value='$nummer'";
            echo "<p>
                    <input type='text' name='begindatum'  size='40' tabindex='1'  value='$begindatum'>
                    </p>";
            echo "<p>
                    <input type='text' name='inleverdatum'  size='40' tabindex='1' value='$inleverdatum'>
                    </p>";
            echo "<p>
                    <input type='text' name='vak' size='40' tabindex='2'  value='$vak'>
                    </p>";
            echo "<p>
                    <input type='text' name='titel'  size='40' tabindex='3' value='$titel'>
                    </p>";
            echo "<p>
                    <input type='text' name='beschrijving' size='140' tabindex='4' value='$beschrijving'>
                    </p>";
            echo "<p>
                    <input type='submit' name='submit' value='submit'>
                    </p>";
            echo "</form>";
            $db = null;

        ?>
    </body>
</html>
