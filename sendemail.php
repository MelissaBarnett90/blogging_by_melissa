</br></br>
</br></br>


<?php
require 'vendor/autoload.php';
 
class SendEmail{
     
    public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("karenhogg778@gmail.com", "Melissa Barnett");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;

            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() . "\n";
                return false; 
            }

    }

}

?>