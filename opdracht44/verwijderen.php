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
            $sql = "SELECT * FROM werkzaamheden WHERE nummer = $_POST[verwijderen]";
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
            echo "<p>
            <form action='verwijderendefinitief.php' method='post'>
            Wilt u deze opdracht definitief verwijderen?
            <input type='hidden' name='nummer' value=$nummer>
            <input type='submit' name='verwijderja' value='Ja'>
            </form></p>";
            echo "<p><form action='menu.php' method='post'>
            <input type='submit' name='verwijdernee' value='Terug'>
            </form></p>"  ;
            $db = null;
        ?>
    </body>
</html>
