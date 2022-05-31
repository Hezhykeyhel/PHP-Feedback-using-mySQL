<?php 
/*
 $_GET = Contains informations abiut thevariables passed through
 a URL r a form
 $_POST = Contains informations about variables passed through a form
$_COOKIE =  Contains informations about variables passed through a variable.
$_SESSION =  Contains information abiout the server environment.
 $_ENV Conatins information about the environment variables.
S_FILES = Containsinformations abou the files uploaded in the script.
$_REQUEST = Contains informaytion about variables passed through the form or URL

*/

// var_dump($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Variables</title>  
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>