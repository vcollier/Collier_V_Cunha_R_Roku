<?php
require_once '../load.php';

confirm_logged_in();

    if(isset($_POST['submit'])){
        $fname = trim($_POST['fname']);
        $uname = trim($_POST['username']);
        $password = md5($_POST['password']);// change trim to md5 to encrypt the user password

    if(empty($password) || empty($uname) || empty($fname)){
        $message = 'Please fill the required fields';
    }else{
        $message = createUser($fname, $uname, $password);
       
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../sass/main.css">
    <title>Resgistera</title>
</head>
<body class="register">
    <a href="../index.html">Back</a>
    <h2>Register for Roku</h2>
    <?php echo !empty($message)? $message: ''; ?>
    <form action="admin_createuser.php" method="post">
    <label>First Name</label>
    <input type="text" name="fname" value=""><br><br>
    <label>Username</label>
    <input type="text" name="username" value=""><br><br>
    <label>Password</label>
  <!-- put php in the input field to actually generate the random password in the form field-->
    <input type="password" id="password" name="password" required><br><br>
    <button name="submit">Create User</button>
    </form>
</body>
</html>
