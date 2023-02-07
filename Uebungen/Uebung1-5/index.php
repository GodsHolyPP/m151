
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $Klasse = $_POST['kl'];

        echo "Hallo {$username} von Klasse{$Klasse}";
    }
?>

<form method="POST" action="?" id="klasse">
    <input type="text" name="name" placeholder="Benutzername" />
    <input type="submit" value="Absenden" />
</form>

<select name="kl" id="kl" form="klasse">
  <option value="1">Klasse 1</option>
  <option value="2">Klasse 2</option>
  <option value="3">Klasse 3</option>
  <option value="4">Klasse 4</option>
</select>