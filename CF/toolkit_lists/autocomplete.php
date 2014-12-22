<?php
	$q=$_GET['q'];
 $my_data=($q);
 //echo $my_data;
 include "../../include/pass.php";
        $conn = $passcode;
        $qw = "SELECT username FROM handles WHERE username LIKE '%$my_data%' ORDER BY username";
        $result = mysqli_query($conn,$qw);
 if($result)
 {
  while($row=mysqli_fetch_array($result))
  {
   echo $row['username']."\n";
  }
 }
?>