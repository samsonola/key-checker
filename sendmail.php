<?php
if (isset($_POST['submit'])) {
    $to = "info@pappyshub.com";
    $name = htmlspecialchars(ucwords($_POST['name']));
    $email = htmlspecialchars(strtolower($_POST['email']));
    $subject = "Message on key_checker website";
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $msg = "Message on Website  from $name, With Email: $email and phone: $phone \n".$message;
   
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $Err = "All fields must be filled!";
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $Err = "Only letters and white space names allowed";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Err = "Invalid email format";
    }else{
        $mail = mail("info@pro-alphaltd.com",$subject,$msg,"From:$email");
        if ($mail) {
            echo "<script>alert('Thanks for contacting us, We will reply as soon as possible')</script>";
        }else{
            echo "<script>alert('Couldn't send message, try again!')</script>";
        }
    }
        }

?>