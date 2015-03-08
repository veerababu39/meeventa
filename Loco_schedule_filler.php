<?php

      include_once 'conn.php';
      $lno=$_GET['q']; 
      $sql_fr="SELECT * FROM register WHERE reg_id='$lno'";
      $res_fr=mysql_query($sql_fr);
      if(mysql_num_rows($res_fr)==1)
	  {
	
	  
	     $sel_prev="SELECT * FROM register WHERE reg_id='$lno'";
		  $sel_b_rep= @mysql_query($sel_prev);
		  $rows=@mysql_fetch_assoc($sel_b_rep);
		   $rid=$rows['reg_id'];
	  $rname=$rows['reg_name'];
	   $mandal=$rows['reg_mandal'];
	    $icity=$rows['reg_city'];
		 $email=$rows['reg_email'];
		
	  
	  echo $rid.'|$|'.$rname.'|$|'.$mandal.'|$|'.$icity.'|$|'.$email;
	   
	   }
	
?>