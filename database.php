<?php
    if(isset($_POST["emailCim"]) && !empty($_POST["emailCim"])){
        $subscriber = $_POST["emailCim"];
    }

    $db = mysqli_connect("localhost", "root", "", "streetfood");
    if(!$db){
        die("Connection is lost!");
    }
    if($db -> query("
        INSERT INTO `subscribers` (`email`) VALUES ('".$subscriber."');
    ")){
        $db -> close();
        header("Location: ./index.html");
    }
?>
