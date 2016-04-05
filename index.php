<?php
require('i18n.php');


include('header.php');

// Page d'accueil lite
if(isset($_GET['m']) && $_GET['m'] == 'lite') {

    include('lite.php');

    // Page d'accueil classique
} else {

    include('full.php');

}?>

</body>
</html>