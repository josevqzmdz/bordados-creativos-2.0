<?php
  if (isset($_POST['submitted_form'])){
    $subject = $_POST['Title'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $complete_message = $email . " ". $message;
    $headers = "From:abc@xyz.com";
    send_mail($subject,$complete_message,$headers);
  }
function send_mail( $subject, $message, $headers){
    // https://stackoverflow.com/questions/5335273/how-can-i-send-an-email-using-php
    $to = "bordadoscreativos.02@gmail.com";
    if(mail($to, $subject, $message, $headers)){
        echo "Message sent successfully...";
     }else {
        echo "Message could not be sent...";
     }
}
?>
