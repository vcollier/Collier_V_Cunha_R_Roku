<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title></title>
</head>
<body>
    
</body>
</html>
<?php


function createUser ($fname, $uname, $password){
    $pdo = Database::getInstance()->getConnection();
    
    //TODO: finish the below so that it can run a SQL query
    // to create a new user with provided data

    $create_user_query = 'INSERT INTO tbl_users(fname, uname, password) VALUES (:fname, :uname, :password)';
    

    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_result = $create_user_set->execute(
        array(
            ':fname'=>$fname,
            ':uname'=>$uname,
            ':password'=>$password
        )
    );
    // if the user is successfully created, send them an email using PHPmailer
    if($create_user_set){
        redirect_to('../index.html');

        // $mail = new PHPMailer\PHPMailer\PHPMailer(); // creates the phpmailer 'object'
        // $mail->isSMTP();
        // $mail->Host = 'smtp.gmail.com'; // set up gmail host, whatever host to choose has to be the source of the email address
        // $mail->SMTPSecure='ssl';
        // $mail->Port = 465;
        // $mail->SMTPAuth = true;
        // $mail->Username = 'FanshaweTest2020@gmail.com'; // use new admin email address 
        // $mail->Password = 'fanshawe@test'; 
        // $mail->addAddress($email);
        // $mail->setFrom('FanshaweTest2020@gmail.com'); // using the email and email service as a mode of transportation
        // $mail->isHTML(true);
        // $mail->Subject = 'New Registration'; 
        // // the body contains a message along with the username and password of that specific user.
        // $mail->Body= 'Hi there! You have succuessfully registered as a new user under administration. Your username is '. $username.' and your password is '.$password.'. To login, visit: http://localhost/Collier_V_Cunha_R_3014_r2/';

        // if(!$mail->send()){
        //     $message = $mail->ErrorInfo;
        //     return 'Something went wrong. Please try again';
        }else{
            redirect_to('../index.html');
            return 'New user created!';
        }
    }

    

        
