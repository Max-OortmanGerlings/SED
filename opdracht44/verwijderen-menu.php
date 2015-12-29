<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Opdrachten verwijderen</title>
    </head>
    <body>
        <?php
            try{
                $db = new PDO('mysql:host=localhost;dbname=sed', 'root', '');
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            $sql = 'SELECT * FROM werkzaamheden';
            $resultaat = $db->query($sql);
            echo "<table border=1>";
            foreach($resultaat as $row){
                $nummer = $row['nummer'];
                echo "<tr>";
                echo '<td>'.$row['begindatum'].'</td>';
                echo '<td>'.$row['inleverdatum'].'</td>';
                echo '<td>'.$row['vak'].'</td>';
                echo '<td>'.$row['titel'].'</td>';
                echo '<td>'.$row['beschrijving'].'</td>';
                echo "<td><form action='verwijderen.php' method='post'>
                <input type='hidden' name='verwijderen' value=$nummer>
                <input type='submit' name='submit' value='verwijderen'></form></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<br>";
            echo "<a class='back-btn' href='menu.php'>Terug naar de homepage</a>";
            $db = null;
        ?>
    </body>
</html>
