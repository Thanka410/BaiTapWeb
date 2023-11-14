
<?php
     $recipients = "test1@test.com,test2@test.com,test3@test.com,test1@test.com";
     $email_array = explode(",",$recipients);
     foreach($email_array as $email)
     {
        $to      =  $email;
        $mail->addAddress($to, $to_name); 
     }
 
 ?>