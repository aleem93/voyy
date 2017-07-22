<?php
session_start();
if(isset($_POST["login"]))
{
	extract($_POST);	
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("voyy",$conn);
	$query=mysql_query("SELECT * from admin", $conn);
	$query1=mysql_fetch_array($query);
	
	if($username==$query1['username'] && $password==$query1['password'])
	{
		$_SESSION['username']=$username;
		?><script>window.location.href="dashboard.php"</script><?php
	}
	else
		?>
	<script>alert("Please enter a valid username or password");</script>
	<?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOYY</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('#pro_enquiry_modal').modal('show');
    });
</script>
	</head>
	<body>
<div class="container">

  <!-- Modal -->
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <form action="" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin login</h4>
        </div>		
        <div class="modal-body clearfix">
		<div class="col-md-2"></div>
        <div class="col-md-8 text-center">
		<div class="form-group">
		  <input type="text" class="form-control " name="username" placeholder="enter username" >
		  </div>
		  <div class="form-group">
<input type="password" class="form-control" name="password" placeholder="password" >
</div>
<input type="submit"  class="btn btn-default submit_btn" style="padding:6px 30px" name="login" value="Login" >

</div>
<div class="col-md-2"></div>
        </div>
		</form>
		</div>
      </div>
      
    </div>
  </div>
</div> 
<body>
</html>
