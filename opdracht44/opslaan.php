<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Opslaan</title>
        <?php
            $datum = date("d-m-Y, G:i");
            try {
                $db = new PDO('mysql:host=localhost;dbname=sed','root', '');
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            $sql = "INSERT INTO werkzaamheden (begindatum, inleverdatum, vak, titel, beschrijving,) VALUES ('$_POST[begindatum]', '$_POST[inleverdatum]', '$_POST[vak]', '$_POST[titel]', '$_POST[beschrijving]')";
            $resultaat = $db->exec($sql);
            echo "<table class='check-table' style='width=100%'>";
            echo '<tr><td>Begindatum <i>(jjjj-mm-dd)</i></td>'.'<td>'.$_POST['begindatum'].'</td></tr>';
            echo '<tr><td>Inleverdatum <i>(jjjj-mm-dd)</i></td>'.'<td>'.$_POST['inleverdatum'].'</td></tr>';
            echo '<tr><td>Vak</td>'.'<td>'.$_POST['vak'].'</td></tr>';
            echo '<tr><td>Titel</td>'.'<td>'.$_POST['titel'].'</td></tr>';
            echo '<tr><td>Beschrijving</td>'.'<td>'.$_POST['beschrijving'].'</td></tr>';
            echo '</table>';
            $db = null;
            echo "<br>Opdracht ingepland!<br>";
            echo "<a class='back-btn' href='menu.php'>Terug naar de homepage</a>";
        ?>
    </head>
    <body>
    </body>
</html>
