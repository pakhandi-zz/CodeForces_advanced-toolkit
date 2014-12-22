<!--

This page shows the common problems solved by two users
and also the problems that are solved by only one user, separately

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
        <?php include "../../include/title_tab.php"; ?>
</title>
<link rel="stylesheet" href="../../css/style.css" />
<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='../../images/favicon.ico' />
<link href="../../css/profilelist.css" rel="stylesheet" type="text/css" media="screen"/>

<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.autocomplete.js"></script>
    <script>
     $(document).ready(function(){
      $("#input_add_to_list").autocomplete("autocomplete.php", {
            selectFirst: true
      });
     });
    </script>
    <script>
     $(document).ready(function(){
      $("#input_add_to_list2").autocomplete("autocomplete.php", {
            selectFirst: true
      });
     });
    </script>

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
    top: 50px;
}
#show_list
{
    position: absolute;
    width: 50%;
    left: 600px;
    top: 90px;

}
.table
{
    width: 100%;
}
#sol
{
  position: absolute;
  top: 450px;
  left: 80px;
  font-size: 20px;
  
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
        <form action="cprobs.php" method="GET" enctype="multipart/form-data">
            <label>
                <font style="font-size : 25px;">
                    Handles :
                </font>
            </label>
            <input type="text" style="color:blue;border-radius:8px;position:absolute;left:27%;width:200px;height:40px;" id="input_add_to_list" name="user" placeholder="CodeForces Username" />
            <label>
                <font style="font-size : 25px; top: 50px;">
                    <!-- Handle -->
                </font>
            </label>
            <input type="text" style="color:blue;border-radius:8px;position:absolute;left:27%;width:200px;height:40px;top:50px" id="input_add_to_list2" name="user2" placeholder="CodeForces Username" />
            
            <button type="submit" id="add_user" class="btn btn-lg btn-success" width="80px">Submissions</button>
        </form>
        <br>
        <br>
        <?php
  
            if(!isset($_GET['user']) )
            {
              die();
            }
            if(!isset($_GET['user2']) )
            {
              die();
            }

        ?>
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

                  $utemp=$_GET['user2'];
                  //echo $utemp;
                  $coder2=$utemp;
                  $url="http://codeforces.com/api/user.info?handles=".$coder2;
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $url);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($ch);  //getting the response from the site in JSON format
                  curl_close($ch);

                  $response=json_decode($response,true);  //converting it to PHP friendly format

                  //values for coder1
                  
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
                  $name2=$name1." ";
                  $name2.=$response['lastName'];
                  $contribution2=$response['contribution'];

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


        ?>
            <br><br>
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
            <br><br>
            <a href="<?php echo "http://codeforces.com/profile/".$coder2; ?>" target="_blank">
              <font style="font-size : 20px; color : <?php echo $c2  ?>; text-decoration : none;">
              <b>
                <?php 

                if(isset($_GET['user2']))
                  echo $rank2." : ".$coder2; 

                ?>
              </b>
              <br>
              <?php 
               if(isset($_GET['user2']))
                  echo "Rating : ".$rating2; 

              ?>
              </font>
            </a>
        
    </div>

    <div id="show_list">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th><center>#</center></th>
            <th><center>PId</center></th>
            <th><center>Problem Name</center></th>
            <th><center><?php echo $_GET['user']; ?><br>solutions</center></th>
            <th><center><?php echo $_GET['user2']; ?><br>solutions</center></th>
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
                  else
                  {
                    include "../../include/pass.php";
                    $conn = $passcode;

                    $qw = "INSERT INTO handles VALUES ('$coder1')";
                    mysqli_query($conn,$qw);
                    mysqli_close($conn);
                  }

                  $response=$response['result'];
            $arr=array();
            for($i=0; $i<5000; $i++)
            { 
                  
                  $temp=$response[$i];
                  $contest_id=$temp['problem']['contestId'];
                  $index=$temp['problem']['index'];
                  $qname=$temp['problem']['name'];
                  $verdict=$temp['verdict'];
                  $id=$temp['id'];
                  if($verdict=="OK")
                  {
                    $arr[$contest_id.$index][0]=$contest_id;
                    $arr[$contest_id.$index][1]=$index;
                    $arr[$contest_id.$index][2]=$qname;
                    $arr[$contest_id.$index][3]=1;
                    $arr[$contest_id.$index][5]=$id;
                  }
  
            }




            $coder2=$_GET['user2'];
                  //making http connection
                  $url="http://codeforces.com/api/user.status?handle=".$coder2;
                 
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
                  else
                  {
                    include "../../include/pass.php";
                    $conn = $passcode;

                    $qw = "INSERT INTO handles VALUES ('$coder2')";
                    mysqli_query($conn,$qw);
                    mysqli_close($conn);
                  }

                  $response=$response['result'];
                  //$arr2=array();
                  for($i=0; $i<5000; $i++)
                  { 
                        
                        $temp=$response[$i];
                        $contest_id=$temp['problem']['contestId'];
                        $index=$temp['problem']['index'];
                        $qname=$temp['problem']['name'];
                        $verdict=$temp['verdict'];
                        $id=$temp['id'];
                        if($verdict=="OK")
                        {
                          $arr[$contest_id.$index][0]=$contest_id;
                          $arr[$contest_id.$index][1]=$index;
                          $arr[$contest_id.$index][2]=$qname;
                          $arr[$contest_id.$index][4]=1;
                          $arr[$contest_id.$index][6]=$id;
                        }
        
                  }


                
                  $sc1=0; $sc2=0; $common=0; $c1only=0; $c2only;

            $i=0;
            krsort($arr); ?>
            <?php 
            foreach($arr as $x=>$x_value) 
            { 


                              if($x_value[3]==1)
                                  $sc1++;
                              if($x_value[4]==1)
                                  $sc2++;
                              if($x_value[3]==1 && $x_value[4]==1)
                                  $common++;

                          
              ?>
              <?php
                if($x_value[3]==1 && $x_value[4]==1);
                else
                    continue;
                    

              ?>
                <tr>
                  <center>
                    <td><center><?php echo $i+1; ?></center></td>
                
                        <td><center><font style="color : black"> <?php echo $x; ?> </font></center></td>
                <?php
                      if($x_value[0]>10000)
                      {
                          $new_link="http://codeforces.com/gym/".$x_value[0]."/attachments";
                          $new_link2="http://codeforces.com/gym/".$x_value[0]."/submission/".$x_value[5];
                          $new_link3="http://codeforces.com/gym/".$x_value[0]."/submission/".$x_value[6];
                      }
                      else
                      {
                          $new_link="http://codeforces.com/problemset/problem/".$x_value[0]."/".$x_value[1];
                          $new_link2="http://codeforces.com/contest/".$x_value[0]."/submission/".$x_value[5];
                          $new_link3="http://codeforces.com/contest/".$x_value[0]."/submission/".$x_value[6];
                      }

                ?>
                           <td><center><font style="color : blue"> 
                              <a href="<?php echo $new_link;  ?>" target="_blank">
                                <?php echo $x_value[2] ?> 
                              </a>
                          </font></center></td>

                          

                          <?php if($x_value[3]!=1) { ?>

                              <td><center>
                                
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/del.png" height="20px" width="20px"> </font></center></td>
                        

                     <?php }     
                     else {
                     ?>
                      
                          <td><center>
                              <a href="<?php echo $new_link2; ?>" target="_blank">
                            <font style="color : <?php echo $ch1 ?>;"> <img src="images/ret.png" height="20px" width="20px"> </font></a></center></td>
                      
                     <?php } 
                     if($x_value[4]!=1) {
                     ?>
                          <td><center>
                                
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/del.png" height="20px" width="20px"> </font></center></td>
                        <?php } else { ?>


                          <td><center>
                            <a href="<?php echo $new_link3; ?>" target="_blank">
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/ret.png" height="20px" width="20px">
                              </font></a></center></td>
                        <?php } ?>
                          </font>
                </tr>
                
          <?php $i++; }
        ?>
        <tr>
          <td></td>
          <td></td>
          <td style="background-color : grey"><center><b><?php echo "BY ".$_GET['user']." only" ?><b></center></td>
          <td></td>
          <td></td>
        </tr>
        <?php 
            foreach($arr as $x=>$x_value) 
            { 


                          
              ?>
              <?php
                if($x_value[3]==1 && $x_value[4]!=1);
                else
                    continue;
                    

              ?>
                <tr>
                  <center>
                    <td><center><?php echo $i+1; ?></center></td>
                
                        <td><center><font style="color : black"> <?php echo $x; ?> </font></center></td>
                
                           <td><center><font style="color : blue"> 
                              <a href="<?php echo "http://codeforces.com/problemset/problem/".$x_value[0]."/".$x_value[1] ?>" target="_blank">
                                <?php echo $x_value[2] ?> 
                              </a>
                          </font></center></td>

                          

                          <?php if($x_value[3]!=1) { ?>

                              <td><center>
                                
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/del.png" height="20px" width="20px"> </font></center></td>
                        

                     <?php }     
                     else {
                     ?>
                      
                          <td><center>
                              <a href="<?php echo "http://codeforces.com/contest/".$x_value[0]."/submission/".$x_value[5] ?>" target="_blank">
                            <font style="color : <?php echo $ch1 ?>;"> <img src="images/ret.png" height="20px" width="20px"> </font></a></center></td>
                      
                     <?php } 
                     if($x_value[4]!=1) {
                     ?>
                          <td><center>
                                
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/del.png" height="20px" width="20px"> </font></center></td>
                        <?php } else { ?>


                          <td><center>
                            <a href="<?php echo "http://codeforces.com/contest/".$x_value[0]."/submission/".$x_value[6] ?>" target="_blank">
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/ret.png" height="20px" width="20px">
                              </font></a></center></td>
                        <?php } ?>
                          </font>
                </tr>
                
          <?php $i++; }
        ?>
        <tr>
          <td></td>
          <td></td>
          <td style="background-color : grey"><center><b><?php echo "BY ".$_GET['user2']." only" ?><b></center></td>
          <td></td>
          <td></td>
        </tr>
        <?php 
            foreach($arr as $x=>$x_value) 
            { 


                          
              ?>
              <?php
                if($x_value[3]!=1 && $x_value[4]==1);
                else
                    continue;
                    

              ?>
                <tr>
                  <center>
                    <td><center><?php echo $i+1; ?></center></td>
                
                        <td><center><font style="color : black"> <?php echo $x; ?> </font></center></td>
                
                           <td><center><font style="color : blue"> 
                              <a href="<?php echo "http://codeforces.com/problemset/problem/".$x_value[0]."/".$x_value[1] ?>" target="_blank">
                                <?php echo $x_value[2] ?> 
                              </a>
                          </font></center></td>

                          

                          <?php if($x_value[3]!=1) { ?>

                              <td><center>
                                
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/del.png" height="20px" width="20px"> </font></center></td>
                        

                     <?php }     
                     else {
                     ?>
                      
                          <td><center>
                              <a href="<?php echo "http://codeforces.com/contest/".$x_value[0]."/submission/".$x_value[5] ?>" target="_blank">
                            <font style="color : <?php echo $ch1 ?>;"> <img src="images/ret.png" height="20px" width="20px"> </font></a></center></td>
                      
                     <?php } 
                     if($x_value[4]!=1) {
                     ?>
                          <td><center>
                                
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/del.png" height="20px" width="20px"> </font></center></td>
                        <?php } else { ?>


                          <td><center>
                            <a href="<?php echo "http://codeforces.com/contest/".$x_value[0]."/submission/".$x_value[6] ?>" target="_blank">
                              <font style="color : <?php echo $ch1 ?>;"> <img src="images/ret.png" height="20px" width="20px">
                              </font></a></center></td>
                        <?php } ?>
                          </font>
                </tr>
                
          <?php $i++; }
        ?>
        

      </tbody>
          </table>
    </div>
    <?php
      $c1only=$sc1-$common;
      $c2only=$sc2-$common;
    ?>

    <div id="sol">
        <?php echo "Common : <b>".$common."</b>" ?><br>
        <?php echo $_GET['user']." : <b>".$sc1."</b>" ?><br>
        <?php echo $_GET['user2']." : <b>".$sc2."</b>" ?><br>
        <?php echo $_GET['user']." only : <b>".$c1only."</b>" ?><br>
        <?php echo $_GET['user2']." only : <b>".$c2only."</b>" ?><br>
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