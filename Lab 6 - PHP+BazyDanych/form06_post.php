<?php
    session_start();

    if (isset($_SESSION['kom']))
    {
        if ($_SESSION['kom'])
        {
            echo "<script type='text/javascript'>alert('Nie udało się dodać pracownika!')</script>";
            $_SESSION['kom'] = false;
        }
    }

    print<<<KONIEC
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        </head>
        <body>
        Dodaj pracownika
            <form action="form06_redirect.php" method="POST">
                id_prac <input type="text" name="id_prac">
                nazwisko <input type="text" name="nazwisko">
                <input type="submit" value="Wstaw">
                <input type="reset" value="Wyczysc">
            </form>
            <br> 
            <a href='form06_get.php'>Lista pracowników</a>
        </body>
    </html>
    KONIEC
?>