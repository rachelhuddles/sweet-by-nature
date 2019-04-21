<?php

      $dsn = 'mysql:host=sql206.byethost.com;dbname=b5_23097898_SweetByNature';
     $username = 'b5_23097898';
     $password = 'xV7sMVwyfl9c5Y';


    try{
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e -> getMessage();
        include('dbError.php');
        exit();
    }
?>	