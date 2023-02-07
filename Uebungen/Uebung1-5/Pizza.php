<?php
    //Seite Starten
    session_start();
    
    $array = [];

    if (isset($_SESSION['a'])) {
       $array = $_SESSION['a']; 
    }
 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       array_push($array, $_POST['Zutat']); 
       $_SESSION['a'] = $array;
    }
 
    foreach ($array as $value) {
       echo '<li>' . $value . '</li>'; 
    }
    
?>

<form method="POST" action="?" id="klasse">
    <label><b> Füge weitere Zutaten hinzu:</b></label>
    <input type="text" name="Zutat" placeholder="Zutat" /> 
    <br>
    <input type="submit" value="Absenden" />
</form>

