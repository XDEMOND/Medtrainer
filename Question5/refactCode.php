<?php

// Question 5 Refact code

    $stmt = $pdo->prepare('SELECT * FROM large_table');
    $stmt->execute();

    // $results = $stmt->fetchAll(PDO::FETCH_ASSOC); // the error is here you need to fech process row by row

    // refact code
    while($result = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        // manipulate the data here
    } 

 
  
?>