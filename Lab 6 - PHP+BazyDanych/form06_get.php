<?php
    session_start();

    if (isset($_SESSION['kom']))
    {
        if ($_SESSION['kom'])
        {
            echo "<script type='text/javascript'>alert('Udało się dodać pracownika!')</script>";
            $_SESSION['kom'] = false;
        }
    }

    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link)
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }


    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);
    foreach ($result as $v)
    {
        echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
    }
    $result->free();
    $link->close();
    echo "<br> <a href='form06_post.php'>Dodaj pracownika</a>";
?>