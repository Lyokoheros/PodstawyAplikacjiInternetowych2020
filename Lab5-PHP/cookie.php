<?php
    session_start();
    require("funkcje.php");

    if(isset($_GET['czas']))
    {
        setcookie("Wybory", "#NaBosaka", time() + $_GET['czas'], "/"); //86400 = 1 dzień
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
    <?php
        if(isSet($_COOKIE['Wybory'])) {echo $_COOKIE['Wybory'];}
        echo "<br> <a href='index.php'>Wstecz</a>";    
    ?>
    </body>
</html>