<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $comentarios =$_POST['comentarios'];
?>

<?php
    $email_from = 'hb.casper@gmail.com';
 
    $email_subject = "Nuevo mensaje recibido";
 
    $email_body = "Has recibido un nuevo mensaje de $name.\n".
    					
                            "Here is the message:\n $message.\n".
                            "Su telefono es:\n $telefono.".
?>

<?php
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
                
    $inject = join('|', $injections);
    $inject = "/$inject/i";
     
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}
 
 

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}




<?php
 
  $to = "hb.casper@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
 
 ?>
 
