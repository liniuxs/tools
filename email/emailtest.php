<html>
<body>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
{
  $to      = $_REQUEST['email'];
  $subject = "Hostinger mail testing" ;
  $message = "If you got this message, mail sending from $server is working fine :)" ;
  $headers = 'From: webmaster@example.com' . "\r\n" .
      'Reply-To: webmaster@example.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

}
else
//if "email" is not filled out, display the form
{
        $server = $_SERVER[HTTP_HOST];
        echo "<h1>Mail test from $server</h1>
        <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
        Enter Your Email: <input name='email' type='text' /><br /><br />
        <input type='submit' name='Submit' value='Submit' />
        </form>";
}
?>

</body>
</html>
