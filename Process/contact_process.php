<?php
    session_start();
    require_once '../classes/sanitize.php';
    require_once '../classes/InsertMessage.php';
    require '../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    if(isset($_POST["btn_msg"])){
        $name= sanitize($_POST['name']);
        $em= sanitize($_POST['email']);
        $sub= sanitize($_POST['subject']);
        $msg= sanitize($_POST['message']);

        if($name && $em && $sub && $msg){

            //send to the database
            $msgs = new InsertMessage();
            $new_msg = $msgs->insert_message($name, $em, $sub, $msg);


            //send to the email
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = "iconuwemfrank@gmail.com";
            $mail->Password = "ulhknhkogfhvrhem";

            $mail->setFrom($em, $name);
            $mail->addAddress("iconuwemfrank@gmail.com", "Uwem");
            $mail->addReplyTo($em, $name); 
            $mail->Subject = $sub;
            $mail->Body = $msg;

            //send mail
            $mail->send();
            echo "Email sent successfuly!";
            
            header("location: ../contact.php");

        }else{
            $_SESSION['missing_fields'] = "Error: All fields are required";
            header("LOCATION: contact_process.php");
        }


    }else{
        $_SESSION['Error'] = "Submit the form the normal way!";
        header("LOCATION: contact_process.php");
        exit();
    }







?>