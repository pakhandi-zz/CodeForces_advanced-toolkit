<?php
session_start();
if (!isset($_SESSION['session_username']))
{
  $flag_login=0;
}
else
{
  $flag_login=1;
  $ufake=$_SESSION['session_username'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "../../include/title_tab.php"; ?></title>
<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
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
  height: 60%;
  right: 0px;
  width: 100px;
  padding-left: 15px;
  padding-top: 30px;
  padding-right: 15px;
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
    width: 600px;
    left: 650px;
    top: 100px;

}

.table
{
    width: 100%;
}
    </style>
</head>

<body style="background-color:white !important;">
 <div class="back_body" id="back_body">
  <div class="upper_body" id="upper_body">
    <div class="logo" id="logo">
        <a href="">
          <font id="logotext" class="logotext" style="font-family:sans-serif;color:red;">
              <?php include "../../include/logo.php"; ?>
              <i class="icon-large icon-github"></i>
          </font>
        </a>
    </div>

    <?php include "../../include/upper_body_buttons.php"; ?>

  </div>

  <?php include "../../include/gitoctocat.php"; ?>

  
<!--here is the code of tool kit-->


 <?php if($flag_login==0) { ?>
<div id="m1">
  <form action="login.php" method="POST" enctype="multipart/form-data">
    <div id="m4" style="position:fixed;">
  
      </div>
    <fieldset style="color:red;border-color:white;height:140px;box-shadow: 5px 5px 50px #0099FF;border-radius:50px;">
        <legend>&nbsp;&nbsp;&nbsp;&nbsp;Log In <span style="font-size:14px;">(This login is different from your codeforces login : <a href="http://tools.bugecode.com/CF/toolkit_lists/submit/"> register here</a>) </span></legend>
            <ol>
              <li>
                  <label>Email-Id :</label>
                  <input type="text" style="color:blue;border-radius:8px;position:absolute;left:30%;width:200px;height:20px; " id="username" name="ufake" placeholder="email-id" />
              </li>
              <br>
              <li>
                 <label>Password :</label>
                  <input type="password" style="color:blue;border-radius:8px;position:absolute;left:50%;left:30%;width:200px;height:20px; "  id="password" name="pfake" placeholder="password" />
              </li>
              <p><input type="submit" value="LogIn" style="position:absolute;left:70%;
                      border-radius:10px;
                      color:red;
                      background-color:#FFAD33;
                      width:70px;
                      heght:15px;" />
              </p>
            </ol>
    </fieldset>
    </form>
  </div>

  

<div id="m2" style="position:fixed;left:810px;top:100px;height:450px;width:400px;border-radius:10px;box-shadow:5px 5px 50px #0099FF;">
  
  This is a simple Tool-Kit for CodeForces where you can create a list of CodeForces usernames and keep an eye on 
  the ratings and recent submissions of your friends <b>:)</b>
  <br><br>
  Sign-up is not required to use the tools (in the header).. It just allows you to make a list of your friends on CF..
  <br><br>
  <a href="http://bugecode.com/CF_Toolkit_Blog.php" target="_blank"><u>Read More</u></a>
  <br><br>
  Simple & Clean.. 
  Happy Competing
  <br>
  <br>
  &nbsp;&nbsp;&nbsp;
  <a href="forgotpassword/"><button type="button" id="forgot_password" class="btn btn-lg btn-danger" width="80px">Forgot Password</button></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="submit/"><button type="button" id="sign_up" class="btn btn-lg btn-danger" width="80px">Sign Up</button></a>
  <br>
  <br>
  <center>
  <a href="feedback.php" target="_blank"><button type="button" id="feedback" class="btn btn-lg btn-success" width="80px">FEEDBACK :)</button></a>
  </center>
  <br>
  <br>
</div>

  <?php } ?>

 <?php if($flag_login==1) { $arr=array(); ?>


      <div id="add_to_list">
        <form action="add_to_list.php" method="POST" enctype="multipart/form-data">
            <label>
                <font style="font-size : 25px;">
                    Add User :
                </font>
            </label>
            <input type="text" style="color:blue;border-radius:8px;position:absolute;left:25%;width:200px;height:40px;" id="input_add_to_list" name="add_user" placeholder="username" />
            <button type="submit" id="add_user" class="btn btn-lg btn-success" width="80px">ADD</button>
        </form>
        <br>
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="password/"><button type="button" id="change_password" class="btn btn-lg btn-success" width="80px">Change Password</button></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php"><button type="button" id="logout" class="btn btn-lg btn-danger" width="80px">LOGOUT</button></a>
        
    </div>

    <div id="show_list">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th><center>DEL</center></th>
            <th><center>#</center></th>
            <th><center>Handle</center></th>
            <th><center>Present-Rating</center></th>
            <th><center>Highest-Rating</center></th>
            <th><center>Submissions</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 
            include "../../include/pass.php";
            $conn = $passcode;
            $result3 = mysqli_query($conn,"SELECT * FROM flist WHERE user='$ufake'");
            $i=0;
            while($row3=mysqli_fetch_array($result3))
            { 
                  /*=============================*/
                  if($row3['showit']==0)
                      continue;
                  $coder1=$row3['friend'];
                 
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
                    echo "<b>"."SERVER ERROR for : ".$coder1."</b>\n";
                    continue;
                    die();
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


                        {
                          $arr[$rating1.$handle1][0]=$handle1;
                          $arr[$rating1.$handle1][1]=$rating1;
                          $arr[$rating1.$handle1][2]=$maxrating1;
                          $arr[$rating1.$handle1][3]=$c1;
                          $arr[$rating1.$handle1][4]=$ch1;
                          
                        }
                  
                }
                  ?>

               <?php   krsort($arr);  
               $i=0;
               foreach($arr as $x=>$x_value)
               {
               ?>

              <tr>
                <center>
                <b>
                  <td><center><a href="remove_user.php?index=<?php echo $row3['friend'] ?>"><img src="images/del.png" height="20px" width="20px"></a>
                                  </center> </td>
                <td><center><?php echo $i; $i++; ?></center></td>
                
                <td><a href="<?php echo "http://codeforces.com/profile/".$x_value[0]; ?>" target="_blank"><center><font style="color : <?php echo $x_value[3] ?>;"> <b><?php echo $x_value[0]; ?></b> </font></center></td></a>
                <td><center><font style="color : <?php echo $x_value[3] ?>;"> <b><?php echo $x_value[1] ?></b></font></center></td>
                <td><center><font style="color : <?php echo $x_value[4] ?>;"> <b><?php echo $x_value[2]; ?></b> </font></center></td>
                <td><a href="submissions.php?user=<?php echo $x_value[0] ?>" target="_blank">>-></a></td>
                </font>
                </b>
              </tr>

              <?php  } ?>
              
            
        

      </tbody>
          </table>
    </div>


    

<?php } ?> 


  <?php include "../../include/lowerbodymaindir.php"; ?>
  
  
</div> 
</body>
</html>