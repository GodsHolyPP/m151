<?php
//http://m151.test/Uebungen/Uebung1-4/?username=Socrates&age=19
    $username = $_GET['username'];
    
    echo "Hallo {$username}!<br />";

    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>