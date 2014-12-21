<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "../../include/title_tab.php"; ?></title>
<style type="text/css">

</style>
<link rel='shortcut icon' type='image/x-icon' href='../../images/favicon.ico' />
<link href="../../css/profilelist.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="mast.css" rel="stylesheet" type="text/css" media="screen"/>
<style>

#trans
{
  padding-left: 15px;
  padding-top: 50px;
  padding-right: 15px;
  border: 1px solid rgba(255, 255, 255, 0.4);
  box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  background-color: rgba(255, 255, 255, 0.2);
  background: rgba(231, 238, 231, 0.2);
  opacity: 1 !important;
  font-size:  : 20px !important;
}

#back_body{
  height: 150%;
}
#upper_body{
  height: 7%;
  position: fixed;
  z-index: 10;
}
textarea
{
    resize: none;
}
#lower{
  position: fixed;
}
body
{
  position: fixed;
}

#name1
{
  position: absolute;
  top: 340px;
  left: 130px;
  font-size: 18px !important;
  width: 200px;

}
#name2
{
  position: absolute;
  top: 340px;
  left: 1070px;
  font-size: 18px !important;
  width: 200px;
}

</style>
</head>

<body>
<div class="back_body" id="back_body">
  <div class="upper_body" id="upper_body">
    <div class="logo" id="logo">
        <a href="index.php">
          <font id="logotext" class="logotext" style="font-family:sans-serif;color:red;">
              <?php include "../../include/logo.php"; ?>
          </font>
        </a>
    </div>

  </div>
  <div class="pic1" id="pic1">
      <a href="https://www.facebook.com/AsimKPrasad"><img src="http://codeforces.com/userphoto/title/pakhandi/photo.jpg" height="190px" width="190px"></a>
  </div>
  
  <div class="pic6" id="pic6">
      <a href="https://www.facebook.com/mpsmks"><img src="http://codeforces.com/userphoto/title/mmaks/photo.jpg" height="190px" width="190px"></a>
  </div>

  <div id="name1">
    <a href="https://www.facebook.com/AsimKPrasad">Asim Krishna Prasad</a>
    </div>
  <div id="name2">
    <a href="https://www.facebook.com/mpsmks">Manish Kumar Sinha</a>
  </div>
  <div class="trans" id="trans">
    <center style="font-size: 20px;">
    <form action="feedback_submit.php" method="POST">
        <textarea rows="20" cols="60" name="ack">
        </textarea>
        <center><button type="submit" id="feedback" class="btn btn-lg btn-success" width="80px">SEND :)</button></center>
    </form>
  </center>
  </div>
  <div class="mast" id="mast">
    
      
    
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
