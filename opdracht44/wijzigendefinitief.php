<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Wijzigdefinitief</title>
    </head>
    <body>
        <?php
            try{
                $db = new PDO('mysql:host=localhost;dbname=sed', 'root', '');
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            $sql = "UPDATE werkzaamheden SET begindatum = '$_POST[begindatum]', inleverdatum = '$_POST[inleverdatum]', vak = '$_POST[vak]', titel = '$_POST[titel]',  beschrijving = '$_POST[beschrijving]' WHERE nummer = $_POST[nummer]";
            $aantalregelsgewijzigd = $db->exec($sql);
            $sql = "SELECT * FROM werkzaamheden WHERE nummer = $_POST[nummer]";
            $resultaat = $db->query($sql);
            foreach($resultaat as $row){
                echo "<p>";
                echo 'Nummer: '.$row['nummer'].'<br>';
                echo 'Begindatum: '.$row['begindatum'].'<br>';
                echo 'Inleverdatum: '.$row['inleverdatum'].'<br>';
                echo 'Vak: '.$row['vak'].'<br>';
                echo 'Titel: '.$row['titel'].'<br>';
                echo 'Beschrijving: '.$row['beschrijving'].'<br>';
                echo "</p>";
            }
            echo "<br>";
            echo "<br>";
            echo "<a class='back-btn' href='menu.php'>Terug naar de homepage</a>";
            $db = null;
        ?>
    </body>
</html>
