<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<?php
$pin=$_GET['pin'];
?> 


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

<h1>Successfully Submitted</h1>

<h1>Your Issue ID is " <?php echo $pin;?> "</h1>
<p>to know your issue status. </p>

</div>
<!--content End-->

<!--Footer start-->
<div class="footer">

<div class="footer-left"><img src="images/footer-left.png" alt="" /></div>

<div class="footer-center"><a href="http://www.sapleo.com" style="color:#FFF">© 2015 by www.sapleo.com</a></div>

<div class="footer-right"><a href="#"><img src="images/footer-right.png" alt="" width="100" height="40" /></a></div>

</div>
<!--Footer End-->

</div>
</div>
<!--Wrapper End-->

</body>


</html>
