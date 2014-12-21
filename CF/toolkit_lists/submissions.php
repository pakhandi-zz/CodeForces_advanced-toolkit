<!--

This page shows the last 15 submissions (with verdict) for a user

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "../../include/title_tab.php"; ?></title>
<link rel="stylesheet" href="../../css/style.css" />
<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='../../images/favicon.ico' />
<link href="../../css/profilelist.css" rel="stylesheet" type="text/css" media="screen"/>
<style>

#back_body
{
  overflow:scroll;
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
  font-size: 18px;
  color : blue;

}
#lower
{
    position: fixed;
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
#add_to_list
{
    position: absolute;
    top: 170px;
    left: 50px;
    width: 40%;
    height: 50%;
    background-color:white
}
#add_user
{
    position: absolute;
    left: 350px;
    height: 40px;
}
#show_list
{
    position: absolute;
    width: 60%;
    left: 600px;
    top: 90px;

}
.table
{
    width: 60%;
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



    <div id="add_to_list">
        <form action="submissions.php" method="GET" enctype="multipart/form-data">
            <label>
                <font style="font-size : 25px;">
                    Codename :
                </font>
            </label>
            <input type="text" style="color:blue;border-radius:8px;position:absolute;left:27%;width:200px;height:40px;" id="input_add_to_list" name="user" placeholder="CodeForcer Username" />
            <button type="submit" id="add_user" class="btn btn-lg btn-success" width="80px">Submissions</button>
        </form>
        <br>
        <br>
        <?php
          $utemp=$_GET['user'];
          $coder1=$utemp;
          $url="http://codeforces.com/api/user.info?handles=".$coder1;
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $url);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($ch);  //getting the response from the site in JSON format
                  curl_close($ch);

                  $response=json_decode($response,true);  //converting it to PHP friendly format

                  //values for coder1
                  
                  $response=$response['result'];
                  $response=$response[0];
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
        ?>
        
            <a href="<?php echo "http://codeforces.com/profile/".$coder1; ?>" target="_blank">
              <font style="font-size : 20px; color : <?php echo $c1  ?>; text-decoration : none;">
              <b>
                <?php 

                if(isset($_GET['user']))
                  echo $rank1." : ".$coder1; 

                ?>
              </b>
              <br>
              <?php 
               if(isset($_GET['user']))
                  echo "Rating : ".$rating1; 

              ?>
              </font>
            </a>
        
    </div>

    <div id="show_list">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th><center>#</center></th>
            <th><center>Index</center></th>
            <th><center>Problem Name</center></th>
            <th><center>Verdict</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 

        /*=============================*/
                  $coder1=$_GET['user'];
                  //making http connection
                  $url="http://codeforces.com/api/user.status?handle=".$coder1;
                 
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $url);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($ch);  //getting the response from the site in JSON format
                  curl_close($ch);

                  $response=json_decode($response,true);  //converting it to PHP friendly format

                  //values for coder1
                  if($response['status']!="OK")
                  {
                    echo "Enter a Valid Username";
                    die();
                  }

                  $response=$response['result'];
            
            for($i=0; $i<15; $i++)
            { 
                  
                  $temp=$response[$i];
                  $contest_id=$temp['problem']['contestId'];
                  $index=$temp['problem']['index'];
                  $qname=$temp['problem']['name'];
                  $verdict=$temp['verdict'];
                  $id=$temp['id'];
                  if($verdict!="OK")
                      $ch1="red";
                  else
                      $ch1="green";
                  
                  ?>
              <tr>
                <center>
                <td><center><?php echo $i+1; ?></center></td>
                
                <td><center><font style="color : <?php echo $c1 ?>;"> <?php echo $index; ?> </font></center></td>
                
                <td><center><font style="color : <?php echo $c1 ?>;"> 
                  <a href="<?php echo "http://codeforces.com/problemset/problem/".$contest_id."/".$index ?>" target="_blank">
                    <?php echo $qname ?> 
                    </a>
                  </font></center></td>
                
                <td><center>
                <font style="color : <?php echo $ch1 ?>;"> 
                <a href="<?php echo "http://codeforces.com/contest/".$contest_id."/submission/".$id ?>" target="_blank">
                <font style="color : <?php echo $ch1 ?>;"> <b><?php echo $verdict; ?></b> </font>
                </font>
                </center></td>
              
                </font>
              </tr>
              
            
        <?php    }
        ?>

      </tbody>
          </table>
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