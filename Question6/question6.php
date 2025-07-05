<?php

// Question 6

   function formatPhoneNumber($phoneNumber, $delimiter = '-') {

    $digits = preg_replace('/\D/', '', $phoneNumber);

    if(strlen($digits) !== 10){
        return $phoneNumber;
    }
    return implode($delimiter, [substr($digits, 0, 3), substr($digits, 3, 3), substr($digits, 6)]);

    
   }

   $array = ['123-456-7890', '(123) 456-7890', '1234567890'];

   foreach($array as $phone){
    $cleanPhone = formatPhoneNumber($phone);
    echo $cleanPhone."\n";
   }

?>