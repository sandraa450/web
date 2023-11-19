<?php
     
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $sex = $_POST['sex'];


    if (empty($username) || empty($password) || empty($fullname) || empty($DateOfBirth) || empty($sex)) {
        echo "All fields are required";
        exit;
    }

    
    $newUser = [
        'username' => $username,
        'password' => $password,
        'fullname' => $fullname,
        'sex' => $sex,
    ];


    
    $file = 'users.json';
    if (!file_exists($file)) {
        
        file_put_contents($file, '[]');
    }

    
    $users = json_decode(file_get_contents($file), true) ?? [];

    
    foreach ($users as $userexists) {
        if ( (isset($userexists['username'])) && ($userexists['username'] === $newUser['username'] )) {

            echo "User already exists"; 
            echo '<script>window.location.href = "index.php";</script>';
            exit;
            
        }
    }

   
    $users[] = $newUser;
   
    file_put_contents($file, json_encode($users));
    
    header("Location: index.php");
    exit(); 



?>