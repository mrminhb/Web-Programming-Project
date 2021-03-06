<?php

$conn = mysqli_connect('localhost', 'root', '', 'user_db', '3307') 
or die('connection failed' . $conn->connect_error); 
// nho them '3307' do port 3306 trong xampp bị conflict

    session_start();

    if(isset($_POST['submit'])){    

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, md5($_POST['password'])); //using MD5 cryptographic protocol
      
        $select = mysqli_query($conn, "SELECT * FROM `user_form` 
        WHERE email = '$email' AND password = '$pass'") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);
            $_SESSION['user_id'] = $row['id'];
            header('location:../profile/profilecard.php');  //redirecting to another url
        }else{
            $message[] = 'incorrect email or password!';
        }
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>
<body>
    <div class="form-container">
        <button id="home" onclick="window.location.href='../../index.php'">
            <i class="fas fa-arrow-left"></i>
            <span>Go to Home page</span>
        </button>
        <form action="" method="post" enctype="multipart/form-data"> <!-- enctype: encoded before submit to server -->
            <h3>Login</h3>
            <?php
                if(isset($message)){
                    foreach((array) $message as $message){
                        echo '<div class="message">'.$message.'</div>';
                    }
                }
            ?>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <input type="password" name="password" placeholder="Enter your password" class="box" required>
            <input type="submit" name="submit" value="login" class="btn">
            <p>Don't have an account? <a href="../register/register.php">Register now!</a></p>
        </form>  
    </div>
</body>
</html>
