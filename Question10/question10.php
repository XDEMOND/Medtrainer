<?php

// Question 10

    $files = [
        '/usr/share/nginx/wordpress/wp-content/themes/index.php',
        '/usr/share/nginx/wordpress/wp-content/themes/mytheme.php',
        '/usr/share/nginx/wordpress/wp-content/plugins/myplugin.php',
        '/usr/share/nginx/wordpress/wp-content/plugins/akismet.php',
        '/usr/share/nginx/wordpress/wp-content/uploads/november.jpg',
    ];

    $exclude = [
        '/usr/share/nginx/wordpress/wp-content/uploads',
        '/usr/share/nginx/wordpress/wp-content/plugins/myplugin.php',
    ];
    


    $filter = array_filter($files, function($file) use ($exclude){
        foreach($exclude as $item) {
            if($file === $item || strpos($file, $item . '/') === 0) {
                return false;
            }
        }
        return true;
    });

    // I use this to print the example
    $string = json_encode($filter, JSON_PRETTY_PRINT);

    echo $string;


?>