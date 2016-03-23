<?php
require('i18n.php');


include('header.php');

// Page d'accueil lite
if ((!isset($_GET['m']) && isset($_SESSION['m']) && $_SESSION['m'] == 'lite' )
    || (isset($_GET['m']) && $_GET['m'] == 'lite')) {

        $_SESSION['m'] = 'lite';
        include('lite.php');

    // Page d'accueil classique
} else {

        $_SESSION['m'] = 'full';
        include('full.php');

}?>

</body>
</html>