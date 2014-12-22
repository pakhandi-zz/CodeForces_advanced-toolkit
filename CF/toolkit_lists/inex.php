<?php
include "../../include/pass.php";
$con2=$passcode;
$result4 = mysqli_query($con2,"SELECT * FROM Recent_CF ORDER BY timest DESC");
$row4=mysqli_fetch_array($result4);
$a1=$row4['user1'];
$a2=$row4['user2'];
$row4=mysqli_fetch_array($result4);
$a3=$row4['user1'];
$a4=$row4['user2'];
$row4=mysqli_fetch_array($result4);
$a5=$row4['user1'];
$a6=$row4['user2'];
$count=mysqli_num_rows($result4);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "../../include/title_tab.php"; ?></title>
<link rel="stylesheet" href="../../css/style.css" />
<link rel="stylesheet" href="../../css/main_style.css" />
<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<link href="../../css/profilelist.css" rel="stylesheet" type="text/css" media="screen"/>

<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.autocomplete.js"></script>
    <script>
     $(document).ready(function(){
      $("#coder1").autocomplete("autocomplete.php", {
            selectFirst: true
      });
     });
    </script>
    <script>
     $(document).ready(function(){
      $("#coder2").autocomplete("autocomplete.php", {
            selectFirst: true
      });
     });
    </script>

<style>

  #back_body
{
  overflow:hidden;
  background-size: 100% 100%;
  background-color: white !important;
  
}
  
#m4
{
  position: absolute;
  top: 320px;
   width: 60%;
   left: 17%;
}
#m2
{
  position: absolute;
  /*top: 200px;*/
  left: 55%;
  height: 50%;
  right: 0px;
  width: 100px;
  padding-left: 15px;
  padding-top: 60px;
  padding-right: 15px;
  font-size: 18px;
  color : blue;

}
#m1
{

  position: absolute;
  top: 200px;
  left: 50px;
  width: 40%;
  height: 50%;
  background-color:white
}

#recent{
  top: 400px;
  left: 60px;
  width: auto;
  position: absolute;
  z-index: 2;
  font-size: 18px;
  color: black;
}

#m3 {
    width:1px;
    background-color:blue;
    position:absolute;
    top:80px;
    bottom:200px;
    left: 680px;
    height: 60%;
}
    </style>
</head>

<body style="background-color:white !important;">
<div class="back_body" id="back_body">
  <div class="upper_body" id="upper_body">
    <div class="logo" id="logo">
        <a href="index.php">
          <font id="logotext" class="logotext" style="font-family:sans-serif;color:red;">
              <?php include "../../include/logo.php"; ?>
          </font>
        </a>
    </div>
    <?php include "../../include/upper_body_buttons.php"; ?>
  </div>


<!--here is the code of tool kit-->
<div id="recent">
  <b>
    <u>RECENT COMPARISONS [<?php echo $count; ?>]</u><br>
<?php echo $a1." -Vs- ".$a2;?>
<br>
<?php echo $a3." -Vs- ".$a4;?>
<br>
<?php echo $a5." -Vs- ".$a6;?>
<br>
</b>
</div>

<div id="m1"><form method="post" action="comparison.php">
<fieldset
style="color:red;border-color:white;height:140px;box-shadow: 5px 5px 50px #0099FF;border-radius:50px;"
>
<legend>&nbsp;&nbsp;&nbsp;&nbsp;Code Names</legend>
<ol>
<li>
<label>Handle 1 :</label>
<input type="text" style="color:blue;border-radius:8px;position:absolute;left:30%;width:200px;height:20px; " id="coder1" name="coder1" placeholder="handle-1" />
</li>
<br>
<li>
<label>Handle 2 :</label>
<input type="text" style="color:blue;border-radius:8px;position:absolute;left:30%;left:30%;width:200px;height:20px; "  id="coder2" name="coder2" placeholder="handle-2" />
</li>
<p><input type="submit" value="compare" style="position:absolute;left:70%;
        border-radius:10px;
        color:red;
        background-color:#FFAD33;
        width:70px;
        heght:15px;" />
</p>
</ol>
</fieldset>
</form></div>
<div  id="m3"></div>

<div id="m2" style="position:fixed;left:750px;top:130px;width:400px;border-radius:10px;box-shadow:5px 5px 50px #0099FF;">
  
  This is a simple Tool-Kit for CodeForces where you can compare your profile with any other coder you want, you
  just need the usernames :)
  <br>
  <br>
  Simple & Clean.. 
  <br>
  <br>
  <center>
  <a href="feedback.php" target="_blank"><button type="button" id="feedback" class="btn btn-lg btn-success" width="80px">FEEDBACK :)</button></a>
  </center>
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