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
            $sql = "SELECT * FROM werkzaamheden WHERE nummer = $_POST[nummer]";
            $resultaat = $db->query($sql);
            foreach($resultaat as $row) {
                echo '<p>';
                $nummer = $row['nummer'];
                echo 'Nummer: '.$row['nummer'].'<br>';
                echo 'Begindatum: '.$row['begindatum'].'<br>';
                echo 'Inleverdatum: '.$row['inleverdatum'].'<br>';
                echo 'Vak: '.$row['vak'].'<br>';
                echo 'Titel: '.$row['titel'].'<br>';
                echo 'Beschrijving: '.$row['beschrijving'].'<br>';
                echo '</p>';
            }
            $sql = "DELETE FROM werkzaamheden WHERE nummer = $_POST[nummer]";
            $resultaat = $db->exec($sql);
            echo "<p>De opdracht is nu verwijderd!</p>";
            echo "<a class='back-btn' href='menu.php'>Terug naar de homepage</a>";
            $db = null;
        ?>
    </body>
</html>
