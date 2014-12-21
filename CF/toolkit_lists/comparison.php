<?php


$coder1=$_POST['coder1'];
$coder2=$_POST['coder2'];


/*=============================*/
//making http connection
$url="http://codeforces.com/api/user.info?handles=".$coder1;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);  //getting the response from the site in JSON format
curl_close($ch);

$response=json_decode($response,true);  //converting it to PHP friendly format

//values for coder1
if($response['status']!="OK")
{
  echo "INVALID USERNAME ".$coder1;
  ?>[ <a href="index.php"> GO BACK </a> ]
  <?php die();
}
$response=$response['result'];
$response=$response[0];
//echo $another[0]['handle'];
$handle1=$response['handle'];
$country1=$response['country'];
$organization1=$response['organization'];
$rank1=$response['rank'];
$rating1=$response['rating'];
$maxrank1=$response['maxRank'];
$maxrating1=$response['maxRating'];
$name1=$response['firstName'];
$name1=$name1." ";
$name1.=$response['lastName'];
$contribution1=$response['contribution'];

if($rating1<1200)
	$c1="grey";
else if($rating1<1500)
	$c1="green";
else if($rating1<1700)
	$c1="blue";
else if($rating1<1900)
	$c1="#a0a";
else if($rating1<2200)
	$c1="#ff8c00";
else
	$c1="red";

if($maxrating1<1200)
	$ch1="grey";
else if($maxrating1<1500)
	$ch1="green";
else if($maxrating1<1700)
	$ch1="blue";
else if($maxrating1<1900)
	$ch1="#a0a";
else if($maxrating1<2200)
	$ch1="#ff8c00";
else
	$ch1="red";

/*============================*/

$url="http://codeforces.com/api/user.info?handles=".$coder2;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
//echo $response;
$response=json_decode($response,true);

//values for coder2
if($response['status']!="OK")
{
  echo "INVALID USERNAME ".$coder2;
  ?>[ <a href="index.php"> GO BACK </a> ]
  <?php die();
}
$response=$response['result'];
$response=$response[0];
$handle2=$response['handle'];
$country2=$response['country'];
$organization2=$response['organization'];
$rank2=$response['rank'];
$rating2=$response['rating'];
$maxrank2=$response['maxRank'];
$maxrating2=$response['maxRating'];
$name2=$response['firstName'];
$name2=$name2." ";
$name2.=$response['lastName'];
$contribution2=$response['contribution'];
include "../../include/pass.php";
$con2=$passcode;
$t=time();
$un=$coder1.$coder2.$t;
mysqli_query($con2,"INSERT INTO Recent_CF (user1, user2, timest, uniquekey) VALUES ('$coder1', '$coder2', '$t', '$un')");
mysqli_close($con2);

if($rating2<1200)
	$c2="grey";
else if($rating2<1500)
	$c2="green";
else if($rating2<1700)
	$c2="blue";
else if($rating2<1900)
	$c2="#a0a";
else if($rating2<2200)
	$c2="#ff8c00";
else
	$c2="red";

if($maxrating2<1200)
	$ch2="grey";
else if($maxrating2<1500)
	$ch2="green";
else if($maxrating2<1700)
	$ch2="blue";
else if($maxrating2<1900)
	$ch2="#a0a";
else if($maxrating2<2200)
	$ch2="#ff8c00";
else
	$ch2="red";

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "../../include/title_tab.php"; ?></title>
<link href="../../css/profilelist.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel='shortcut icon' type='image/x-icon' href='../../images/favicon.ico' />
<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
<style>
      
#back_body
{
  overflow:hidden;
  background-size: 100% 100%;
  background-color: white !important;
  z-index: -2;
}


#m2,#trans2
{
  position: absolute;
  top: 120px;
  right: 50px;
  width: 40%;
  height: 50%;
}

#m1,#m2,#trans1,#trans2
{
	margin-left: 5px;
	border-radius: 3px;
	border: 1px solid rgba(255, 255, 255, 0.4);
	box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.32);
	background-color: rgba(255, 255, 255, 0.2);
	background: rgba(231, 238, 231, 0.2);
}



#m1,#trans1
{
  position: absolute;
  top: 120px;
  left: 50px;
  width: 40%;
  height: 50%;
  
}

#m3 {
    width: 7px;
    background-image: -webkit-gradient(
	linear,
	left top,
	left bottom,
	color-stop(0.06, #FA0505),
	color-stop(0.28, #DDFF00),
	color-stop(0.54, #BE14C7),
	color-stop(0.71, #4309F0),
	color-stop(0.87, #2F731B),
	color-stop(1, #AFADB3)
);
background-image: -o-linear-gradient(bottom, #FA0505 6%, #DDFF00 28%, #BE14C7 54%, #4309F0 71%, #2F731B 87%, #AFADB3 100%);
background-image: -moz-linear-gradient(bottom, #FA0505 6%, #DDFF00 28%, #BE14C7 54%, #4309F0 71%, #2F731B 87%, #AFADB3 100%);
background-image: -webkit-linear-gradient(bottom, #FA0505 6%, #DDFF00 28%, #BE14C7 54%, #4309F0 71%, #2F731B 87%, #AFADB3 100%);
background-image: -ms-linear-gradient(bottom, #FA0505 6%, #DDFF00 28%, #BE14C7 54%, #4309F0 71%, #2F731B 87%, #AFADB3 100%);
background-image: linear-gradient(to bottom, #FA0505 6%, #DDFF00 28%, #BE14C7 54%, #4309F0 71%, #2F731B 87%, #AFADB3 100%);
    position:absolute;
    top:85px;
    bottom:60px;
    left:50%;
}
#m1,#m2
{
	overflow: hidden;
	background: rgba(255, 255, 255, 0);
	z-index: +1;
	padding-left: 15px;
	padding-top: 15px;
	height: 70%;
	width: 45%;
}
#trans1,#trans2
{
	top: -32px;
	height: 120%;
	width: 120%;
	bottom: 0px;
	right: 0px;
	left: -30px;
	opacity: 0.2;
	z-index: -1;
}
#username
{
	font-size: 30px;
}
#general
{
	font-size: 20px;
}
#current_rating
{
	font-size: 25px;
}
#contribution
{
	font-size: 25px;
	color : green;
}
    </style>
</head>

<body style="background-color:white !important;">
<div class="back_body" id="back_body">
  <div class="upper_body" id="upper_body">
    <div class="logo" id="logo">
        <a href="inex.php">
          <font id="logotext" class="logotext">
            Go-Back
          </font>
        </a>
    </div>

  </div>

<!--here is the code of tool kit-->


<div id="m1">
	  <div id="trans1" style="background : url(<?php echo "http://codeforces.com/userphoto/title/".$handle1."/photo.jpg" ?>) no-repeat; background-size: 120%">
	  </div>
			<font id="username" style="color : <?php echo $c1  ?>;">
					<center>
						<?php  echo $rank1." : ".$handle1."  ";  ?>
						<a href="http://codeforces.com/profile/<?php echo $handle1; ?>">></a>
					</center>
			</font>

			<font id="general">
				<center style="font-size : 15px;">
					<?php echo $name1; ?>
				</center>
				<br>
				Current Rating :
			</font>
			<font id="current_rating" style="color : <?php echo $c1  ?>;">
				<?php echo " ".$rating1; ?>
			</font>
			<br>
			<br>
			<font id="general">
				Best Rating &nbsp;&nbsp;&nbsp;&nbsp;:
			</font>
			<font id="current_rating" style="color : <?php echo $ch1  ?>;">
				<?php echo " ".$maxrating1; ?>
				<br>
				<center>
					<?php echo $maxrank1." : ".$handle1; ?>
				</center>
			</font>
			<br>
			<font id="general">
				Contribution &nbsp;:
			</font>
			<font id="contribution">
				<?php echo $contribution1; ?>
			</font>
			<br>
			<br>
			<font id="general">
				Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
			</font>
			<font id="contribution">
				<?php echo $country1; ?>
			</font>
			<br>
			<br>
			<font id="general">
				Organization :
			</font>
			<font id="contribution">
				<?php echo $organization1; ?>
			</font>
			<br>
			<br>
			<?php if($rating2<$rating1) 
			{
			?>
			<font id="username" style="color : <?php echo $c1  ?>;">
	    	<center>
	    		<b><font style="font-size : 20px; color : black;">And the Winnnnner is : </font></b>
				<?php  echo $handle1; ?> 
			</center>
			<?php
			}
			?>
			</font>
</div>

<div id="m2" >
    <div id="trans2" style="background : url(<?php echo "http://codeforces.com/userphoto/title/".$handle2."/photo.jpg" ?>) no-repeat; background-size: 120%">
    </div>
	    <font id="username" style="color : <?php echo $c2  ?>;">
	    	<center>
				<?php  echo $rank2." : ".$handle2."  "; ?> 
				<a href="http://codeforces.com/profile/<?php echo $handle2; ?>">></a>
			</center>
		</font>
		<font id="general" >
				<center style="font-size : 15px;">
					<?php echo $name2; ?>
				</center>
				<br>
				Current Rating :
		</font>
		<font id="current_rating" style="color : <?php echo $c2  ?>;">
				<?php echo " ".$rating2; ?>
		</font>
		<br>
		<br>
		<font id="general">
				Best Rating :
			</font>
			
			<font id="current_rating" style="color : <?php echo $ch2  ?>;">
				<?php echo " ".$maxrating2; ?>
				<br>
				<center>
					<?php echo $maxrank2." : ".$handle2; ?>
				</center>
		</font>
		<br>
			<font id="general">
				Contribution &nbsp;:
			</font>
			<font id="contribution">
				<?php echo $contribution2; ?>
			</font>
			<br>
			<br>
			<font id="general">
				Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
			</font>
			<font id="contribution">
				<?php echo $country2; ?>
			</font>
			<br>
			<br>
			<font id="general">
				Organization :
			</font>
			<font id="contribution">
				<?php echo $organization2; ?>
			</font>
			<br>
			<br>
			<?php if($rating2>$rating1) 
			{
			?>
			<font id="username" style="color : <?php echo $c2  ?>;">
	    	<center>
	    		<b><font style="font-size : 20px; color : black;">And the Winnnnner is : </font></b>
				<?php  echo $handle2; ?> 
			</center>
			<?php
			}
			?>
			</font>
</div>

<div  id="m3">
</div>


  <?php include "../../include/lowerbodymaindir.php"; ?>
  
  
</div>
</body>
</html>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56207835-2', 'auto');
  ga('send', 'pageview');

</script>
