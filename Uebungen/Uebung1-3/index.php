<?php
    //Seite Starten
    session_start();
    //Daten Laden
    $anzahl_aufrufe = 1;
    if (isset($_SESSION['anzahl_aufrufe'])) {
        $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
        
    }
    //Daten verarbeiten
    echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
    $anzahl_aufrufe++;
    //Daten speichern
    $_SESSION['anzahl_aufrufe']=$anzahl_aufrufe;

?>