<?php
/**
 * Created by PhpStorm.
 * User: minhl
 * Date: 3/24/2020
 * Time: 11:43 AM
 */
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['message'];

        $to='webvineorganization@gmail.com'; // Receiver Email ID, Replace with your email ID
        $subject='WebVine Form Submission';
        $message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong!";
        }
    }
?>