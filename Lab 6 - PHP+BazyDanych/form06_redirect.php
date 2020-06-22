<?php
    session_start();

    $_SESSION['kom'] = true;

    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link)
    {header("Location: form06_post.php");}

    
    if (isset($_POST['id_prac']) && 
        is_numeric($_POST['id_prac']) &&   
        is_string($_POST['nazwisko']))
    {
        $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
        $result = $stmt->execute();

        $stmt->close();
    }
    $link->close();

    if ($result)
    {header("Location: form06_get.php");} 
    else
    {header("Location: form06_post.php");}
?>