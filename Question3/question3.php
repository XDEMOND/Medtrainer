<?php

// Question 3

   $password = 'Qwerty12345!0';

   $hash = password_hash($password, PASSWORD_DEFAULT);

   if (password_verify($password, $hash)) {
    echo 'ok,  its the same password';
   } else {
    echo 'not ok,  its not the same password';
   }

?>