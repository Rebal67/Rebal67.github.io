<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['message'];
$email_from ='mail';
$email_body="user name:$name \n".
             "user mail:$email \n".
             "user message:$msg \n";
             $to="Bakering2004@hotmail.com";
             $headers="from:$email_from \r \n";
             $headers .="reply:$email \r \n";
             mail($to,$subject,$email_body,$headers);
            header("location:./HTML/contact.html");
            ?>