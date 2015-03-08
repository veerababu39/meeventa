<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!--Wrapper start-->
<div id="wrapper">
<div id="page">

<!--Header start-->
<div class="header">

<div class="logo">
<div class="small-logo"><img src="images/logo-small.png" alt="" /></div>
<div class="home"><a href="index.html"><img src="images/home.png" alt="" /></a></div>
</div>

</div>
<!--Header End-->

<!--content start-->
<div class="content">

<h1>Enter Issue ID</h1>
<form action="status.php" method="post">
<p><input type="text" id="mobile" name="id" size="18" required placeholder="example: 8019726260" maxlength="10"  /></p>

<button type="submit"  value="submit" name="submit" style=" height:40px; width:150px;">Submit</button>

</form>
<div style="height:80px; width:150px;">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center>
<?php
if(isset($_POST['submit'])){
	include_once 'conn.php';
	$id = $_POST['id'];
	 $sql_fr="SELECT * FROM issue WHERE issu_id=$id";
	  $sel_b_rep= @mysql_query($sql_fr);
		  $rows=@mysql_fetch_assoc($sel_b_rep);
		   $rid=$rows['issu_status'];
		   echo "Status is : $rid";
}?></center></p></div>
</div>
<!--content End-->

<!--Footer start-->
<div class="footer">

<div class="footer-left"><img src="images/footer-left.png" alt="" /></div>

<div class="footer-center">© 2012Mobile Theme</div>

<div class="footer-right"><a href="#"><img src="images/footer-right.png" alt="" width="100" height="40" /></a></div>

</div>
<!--Footer End-->

</div>
</div>
<!--Wrapper End-->

</body>


</html>
