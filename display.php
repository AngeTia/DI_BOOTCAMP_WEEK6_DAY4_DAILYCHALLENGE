<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['list'])) {
        // Compter le nombre de cases cochées.
        $checked_count = count($_POST['list']);
        $name = $_POST['username'];
        echo $name . " 's favourite colors are " . $checked_count . " option(s): <br/>";
        // Boucle pour stocker et afficher les valeurs de chaque case cochée.
        foreach ($_POST['list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Please Select Atleast One Option.</b>";
    }
}
