<?php
session_start();
$ufake="";
$cid=$_GET['index'];
function foo($new)
{
  $url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
  $url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
  $url .= '/'.$new;            // <-- Your relative path
  header('Location: '.$url);              // Use either 301 or 302
  die();
}
if (!isset($_SESSION['session_username'])) 
{
  $flag_login=0;
  header('Location: index.php');
  die();
}

else
{
  $flag_login=1;
  $ufake=$_SESSION['session_username'];
}
?>
<?php
date_default_timezone_set('Asia/Kolkata');

$con5=mysqli_connect("xxxxxxx","xxxxxx","XXxxxXX","XXxxxx");

$qw = "DELETE FROM flist WHERE unique_id = '" . $_SESSION['session_username'].$cid . "'";
mysqli_query($con5,$qw);
mysqli_close($con5);

header('Location: index.php');
  die();

?>