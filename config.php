<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51P6xJESAzZwvoadXoeMelhta6djrVC0B2ZwdXoFbl6IFsMqMuV97V537aUBJpUVWnc4efBzGSLqxFkfgO0rsxYt2000vE5q67Q",
        "publishableKey" => "pk_test_51P6xJESAzZwvoadXwzdQMltO6I4Skrvnv7LjQ2zbxmwyhwP1eBGtyypj4r6NuZ66coi6RSPOS434bHZrhBCddCBW00jEBLVrrm"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>