<?php
    session_start();
    require("funkcje.php");

    function userlogin($imie)
    {
        $_SESSION['zalogowanyImie']=$imie;
        $_SESSION['zalogowany']=1;
    }
    


    if(isset($_POST['login']) && isset($_POST['password'])) 
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($login ==  $osoba1->login && $password ==  $osoba1->haslo)
        {
            userlogin($osoba1->imieNazwisko);
            header("Location: user.php");
        }
        elseif ($login ==  $osoba2->login && $password ==  $osoba2->haslo )
        {
            userlogin($osoba2->imieNazwisko);
            header("Location: user.php");
        }
        else
        {header("Location: index.php");}
    }
    else
    {header("Location: index.php");}

?>
