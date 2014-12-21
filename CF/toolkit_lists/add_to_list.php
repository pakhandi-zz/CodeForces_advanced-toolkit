<?php
session_start();
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
 
$new_user = $_POST[add_user];

$url="http://codeforces.com/api/user.info?handles=".$new_user;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);  //getting the response from the site in JSON format
curl_close($ch);

$response=json_decode($response,true);  //converting it to PHP friendly format

//values for coder1
if($response['status']!="OK")
{
	header('Location: index.php');
	die();
}

if(!isset($_POST[add_user]) || $new_user=="")
{
	header('Location: index.php');
	die();
}
else
{
		include "../../include/pass.php";
		$conn = $passcode;
		$new_user = mysqli_real_escape_string($conn,$new_user);
		$qw = "INSERT INTO flist (user, friend, unique_id) VALUES ('" . $_SESSION['session_username'] . "', '" . $new_user . "', '" . $_SESSION['session_username'] . $new_user . "')";
		mysqli_query($conn, $qw);
		mysqli_close($conn);
}


header('Location: index.php');
	die();
	
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56207835-2', 'auto');
  ga('send', 'pageview');

</script>