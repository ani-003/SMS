<?php

session_start();
include ("db.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./login-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>

    <header>
        <div class="logo"></div>
    </header>

    <div class="container" id="login-container">
        <div class="box">
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="uname">
                    <label for="username">USERNAME</label>
                    <input type="text" name="email" id="username">
                </div>
                <div class="password">
                    <label for="password"> PASSWORD</label>
                    <input type="password" name="pass" id="password">
                    <label id = "alert" style="color : red"></label>

                </div>
                <div class="options">

                    <input type="submit" name="login" value="SIGN-IN" id="sign-in-btn"></input>
                    
                    
                    
                  <br>
                        <button style="background-color: rgb(245, 125, 13);" id="register-btn-login">   <a href="register.php">REGISTER </a></button>
          

                   
                    
                </div>
            </form>

        </div>
    </div>


</body>

<script>
  document.getElementById('register-btn-login').addEventListener('click', function() {
   
    window.location.href = 'register.php';
  });
</script>

</html>

<?php
if ($_POST['login']) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

$query = "SELECT * FROM form where email='$email' and pass='$pass'"; // Replace with your actual query
$result = mysqli_query($con, $query);
$total = mysqli_num_rows($result);

if ($total != 0) {
    $_SESSION["email"] = $email;
    header("Location: student-profile.php");
    exit();
}
else {
    echo "
    <script>
        var labelalert = document.getElementById('alert');
        labelalert.textContent = 'Incorrect email or password';
    </script>";
}


}

?>
