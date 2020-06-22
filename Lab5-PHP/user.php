<?php
    session_start();
    require("funkcje.php");

    function logoutform()
    {
        echo <<<TEXT
        <form action="index.php" method="POST">
            <input type="submit" value="wyloguj" name="wyloguj"> 
        </form>
        TEXT;   
    }

    function uploadForm()
    {
        echo <<<TEXT
        
        <form action='user.php' method='POST' enctype='multipart/form-data'>
            <label for="myfile">Wybierz avatar</label>
            <input name="myfile" type="file" />
            <input type="Submit" name="submit" value="wyślij"/>
        </form>
        TEXT;   

    }

    function upload()
    {
        $currentDir = getcwd();
        $uploadDirectory = "/zdjeciaUzytkownikow/";
        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $tmpName = $_FILES['myfile']['tmp_name']; 
        $fileType = $_FILES['myfile']['type'];
        $allowed = array('image/png', 'image/jpeg', 'image/JPEG', 'image/PNG');
        if ($fileName != "" and in_array($fileType, $allowed))
        {
            $uploadPath = $currentDir . $uploadDirectory . $fileName;
            if(move_uploaded_file($tmpName, $uploadPath))
            { echo "<br> Zdjęcie zostało załadowane na serwer FTP <br>";}
        }
        else {echo "Zły typ pliku";}
    } 

    if (!isset($_SESSION['zalogowany'])) {header("Location: index.php");}
    elseif($_SESSION['zalogowany']==0)  {header("Location: index.php");}   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
    <?php
        echo $_SESSION['zalogowanyImie'];
        echo "<br> zalogowano <br>";
        //".getcwd()."
        $image = "<img src='/lab5-php/zdjeciaUzytkownikow/avatar.png'"." alt='brak avatara'>";

        if(isset($_POST['submit']))
        {
            upload();
        }
        else
        {
            uploadForm();
        }
        echo $image;


        echo "<br> <a href='index.php'>Powrót do strony głównej</a>";
        logoutform();
    ?>

    </body>
</html>