<?php 

if(isset($_GET['con']))
{
$myacive=$_GET['con'];
}
else
	$myacive=1;
?>
<header>
	<div class="container">
		<nav class="navbar navbar-default nav_menu">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive" alt="logo" width=" " height=" " /></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
		      <ul class="nav navbar-nav">
		        <li <?php if($myacive==1) { echo 'class="active"'; }?>><a href="index.php?con=1">Home</a></li>
		        <li <?php if($myacive==2) { echo 'class="active"'; }?>><a href="about-the-brand.php?con=2">About The Brand</a></li>
		        <li <?php if($myacive==3) { echo 'class="active"'; }?>>
					<a href="category.php?con=3" >Our Verticals</a>													
				</li>
		        <li <?php if($myacive==4) { echo 'class="active"'; }?>><a href="become-a-partner.php?con=4">Become A Partner</a></li>
		        <li <?php if($myacive==5) { echo 'class="active"'; }?>><a href="contact-us.php?con=5">Contact Us</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</header>
<!-- <div style="height: 1000px; background:red;"></div> -->