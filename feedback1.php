<?php
if(isset($_POST['submit'])){

//error_reporting(0);
//ini_set('display_errors',0);
	
include_once 'conn.php';
	
	$Public = $_POST['Public'];
	$Water = $_POST['Water'];
	$comments = $_POST['comments'];
	$Mandal = $_POST['Mandal'];
	$village = $_POST['village'];
		$Mandal1 = $_POST['Mandal1'];
	$village1 = $_POST['village1'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$name=$_POST['fullname'];
	date_default_timezone_set("Asia/Kolkata");
	$dt2=date("Y-m-d H:i:s");
	$pin_test=$mobile;
	$pin0="select count(issu_id)+1  from issue";
	 $sel_b_rep= @mysql_query($pin0);
		  $rows=@mysql_fetch_assoc($sel_b_rep);
		 $pin =$rows['count(issu_id)+1'];
	 $sql_fr="SELECT * FROM register WHERE reg_id='$mobile'";
      $res_fr=mysql_query($sql_fr);
      if(mysql_num_rows($res_fr)==1)
	  {
		  
		  $sql2="INSERT INTO `issue` (`reg_id`,`reg_mandal`,`reg_city`, `reg_name`,`issu_type`, `issu_category`, `issu_description`, `issu_date`, `issu_status`, `issu_close_date`, `issu_file_path`) VALUES ('$mobile','$Mandal1','$village1', '$name','$Public', '$Water', '$comments', '$dt2 ', 'pending', 'pending', 'path')";
		  header("location: success.php?pin=$pin");
		  
		  if (!mysql_query($sql2,$con))
  			{
 				 die('Error: ' . mysql_error());
 			}
	  }
	  else
	  {					
	$sql="INSERT INTO `register` (`reg_pin`,`reg_name`, `reg_id`, `reg_phone`, `reg_mandal`, `reg_city`, `reg_email`, `reg_date`) VALUES ('$pin','$name', '$mobile', '$mobile', '$Mandal', '$village', '$email', '$dt2')";
	$sql2="INSERT INTO `issue` (`reg_id`, `reg_mandal`,`reg_city`,`reg_name`,`issu_type`, `issu_category`, `issu_description`, `issu_date`, `issu_status`, `issu_close_date`, `issu_file_path`) VALUES ('$mobile','$Mandal','$village', '$name','$Public', '$Water', '$comments', '$dt2 ', 'pending', 'pending ', 'path')";
	header("location: success.php?pin=$pin");
	if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  	if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }
	  }

	}
  ?>

