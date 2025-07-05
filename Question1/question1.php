<?php

// Question 1 

    $str = 'I love superman';

    $str2 = 'Superman is awesome!';


    if (strpos(strtolower($str2), 'superman') === false) {
        throw new Exception();
    }

    echo 'ok';

?>