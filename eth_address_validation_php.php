<?php

    $ethereumAddress = "0x89205A3A3b2A69De6bf7f01ED13B2108B2c43e7";
    
     $regex = "/^0x[a-fA-F0-9]{40}$/";
        
     if (preg_match($regex, $ethereumAddress))
     {
         echo 'Valid ETH Address';
     }
     else
     {
         echo 'InValid ETH Address';
     }

?>
