<?php
echo '<pre>'; // balise HTML de présentation des données
var_dump($_POST); // Debug des données
echo '</pre>';

// Si la globale $_POST est définie
// Et qu'elle n'est pas vide

if (isset($_POST) && !empty($_POST)) {
    if (filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL)) {
        echo '<pre>'; // balise HTML de présentation des données
        var_dump($_POST['email2']); // Debug des données
        echo '</pre>';

        if (!empty($_POST['pwd2'])) {
            echo '<pre>'; // balise HTML de présentation des données
            var_dump($_POST['pwd2']); // Debug des données
            echo '</pre>';

            if (!empty($_POST['prenom2'])) {
                echo '<pre>'; // balise HTML de présentation des données
                var_dump($_POST['prenom2']); // Debug des données
                echo '</pre>';

                if (!empty($_POST['nom2'])) {
                    echo '<pre>'; // balise HTML de présentation des données
                    var_dump($_POST['nom2']); // Debug des données
                    echo '</pre>';

                    echo '<table style="border-collapse:collapse" class="align-center">';
                    foreach ($_POST as $key => $value) {
                        echo '<tr>';
                        echo '<td style="border:1px solid black">' . $key . '</td>';
                        echo '<td style="border:1px solid black">' . $_POST[$key] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                }
            }
        }
    }

}


// echo "<table border=\"1\">";
// echo "<caption><b>Vos informations</b></caption>";
// foreach ($_POST as $key => $value) {
//     echo "<tr><td>$cle</td><td>$val</td></tr>";
// }
// echo "</table>";

?>