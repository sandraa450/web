<?php

    $un =$_POST["username"];
    $pw=$_POST["password"];

    $file = 'users.json';
    $users = json_decode(file_get_contents($file), true) ?? [];
    if (!file_exists($file) || empty($users)) {
        header('Location: signup.html');
        exit;
    }

    
    $userexist = false;
    foreach ($users as $userexists) {
        if ($userexists['username'] === $un) {
            $userexist = true;
            break;
        }
    }

    if ($userexist) {
        session_start();
        $_SESSION["username"]=ucfirst($un);
        header('Location: main.php');
        exit;
    } else {
        echo ("Login failed!");
            
        
        echo '<script>window.location.href = "index.php";</script>';
        exit;
    }
    
?>