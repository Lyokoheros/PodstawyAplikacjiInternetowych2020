<?php
    session_start();
    require("funkcje.php");

    function userlogin($imie)
    {
        $_SESSION['zalogowanyImie']=$imie;
        $_SESSION['zalogowany']=1;
    }

    function loginForm()
    {
        echo <<<TEXT
            <form action="logowanie.php" method="POST">
            <legend>Logowanie</legend>
                Login <input type="text" name="login"/>
                <br>
                Hasło <input type="text" name="password"/>
                <br>
                <input type="submit">
            </form>
            TEXT;   
    }


    function cookieForm()
    {
        echo <<<TEXT
            <form action="cookie.php" method="GET">
            <legend>Tworzenie pliku cookie</legend>
                <label for="czas">Czas[s]</label>
                <input type="text" name="czas"/>
                <br>
                <input type="submit" name="utworzCookie" value="utwórz">
            </form>
        TEXT;   
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <h1>Nasz System</h1>
        <?php
            /*if(isset($_POST['login']) && isset($_POST['password'])) 
            {
                echo $_POST['login']
                echo $_POST['password']
            }*/
            if(isset($_POST['wyloguj']))
            {
                if(isset($_SESSION['zalogowany']))
                {
                    $_SESSION['zalogowany']=0;            
                }        
            }
            if(isSet($_COOKIE['Wybory'])) {echo $_COOKIE['Wybory'];}
        

            loginForm();
            echo "<br><br>";
            cookieForm();
            echo "<br> <a href='user.php'>Profil</a>";
        ?>
    </body>
</html>