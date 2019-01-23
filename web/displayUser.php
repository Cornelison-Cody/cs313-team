<?php


    echo "User Name: ".$_POST['Name']."<br>";
    echo "Email: "."<a href=\"mailto:".$_POST['Email']."\">".$_POST['Email']."</a><br>";
    echo "Major: ".$_POST['Major']."<br>";
    echo "Continents Visited:";
    foreach ($_POST['Continents'] as $continent) {
        echo $continent." ";
    }
    echo "<br>Comments: ".$_POST['Comments']."<br>";


?>