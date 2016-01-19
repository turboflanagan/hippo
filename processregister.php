<?php
    include('inc/db_connect.php');
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $username = $_POST['username'];
    $status = "1";
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    //Check to see if the email already exists
    $result2 = DB::query("SELECT * FROM users WHERE email=%s", $email);
    if($result2){
        header ('Location: /register.php?error=emailexists');
        exit;
    }


    //Check to see if the username already exists
    $result = DB::query("SELECT * FROM users WHERE username=%s", $username);
    if(!$result){
        $canRegister = true;
        // $_SESSION['username'] = $_POST['username'];
    }else{
        $canRegister = false;
    }
    if($canRegister && ($password == $password2)){
        try{
            DB:: insert('users',array(
                'username'=> $username,
                'password'=> $hashed_password,
                'email' => $email,
                'name' => $name,
                'status' => $status
            ));
            $_SESSION['username'] = $username; // $_SESSION is a cookie that is around as long as the browser is open.
            $_SESSION['uid'] = DB:: insertId(); // This will get the last auto-incremented id that was inserted into the database.
            header('Location: index.php');
            exit; 
        }catch(MeekroDBException $e){
            header('Location: /register.php?error=yes');
            exit;
        }
    }else{    
        header('Location: /register.php?error=usernameexists');
        exit;
    }
    if($password != $password2){
        header('Location: /register.php?error=nomatch');
        exit;
    }


?>


