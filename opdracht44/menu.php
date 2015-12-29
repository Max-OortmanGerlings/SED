<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Gastenboek</title>
    </head>
    <body>
        <header>
            <h2>School Planner</h2>
            <hr>
            <?php echo date("d-m-Y, G:i");?>
        </header>
        <hr>
        <br>
        <div class="btn-wrap">
            <a class="btn" href="schrijven.php">SCHRIJVEN</a>
            <a class="btn" href="lezen.php">LEZEN</a>
        </div>
        <div class="btn-wrap">
            <a class="btn" href="wijzig-menu.php">WIJZIGEN</a>
            <a class="btn" href="verwijderen-menu.php">VERWIJDEREN</a>
        </div>
    </body>
</html>
