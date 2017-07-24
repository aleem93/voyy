<?php
/* session_start();
if(!isset($_SESSION["username"])){
header("Location: admin_login.php");
exit;
} */
?>
<?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
if(isset($_POST["add_prod"]))
{
	extract($_POST);
	
if(isset($_FILES['prod_image']['name']))
{
	$target_dir = "../images/pro/";
$target_file = $target_dir.$_FILES['prod_image']['name'];
 move_uploaded_file($_FILES['prod_image']['tmp_name'], $target_file);
 mysql_query("insert into manage_product set prod_image='".$_FILES['prod_image']['name']."', prod_name='$prod_name', prod_size='$size', category_id='$select_cat', sub_cat_id='$select_sub_cat', model_num='$model_num', specification='$spec',  description='$desc', date=now()", $conn);
}
?>
<script ></script>
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
    <?php include 'includes/head.php'; ?>
	<style>
	table{width:100%; }
	th, td{
		height:30px;
		text-align:center; 
		border:1px solid black
	}
	input[type="submit"]
	{
		margin:20px
	}
	</style>
	<script>
	function addproduct()
	{
		        $('#myModal').modal('show');

	}
	function edit(product_id)
	{
		window.location="product_edit.php?product_id="+product_id;
	}
	</script>
      </head>
  <body class="home">
  
  <div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Product</h4>
        </div>		
        <div class="modal-body clearfix">
        
		  Product Name:<input type="text" class="form-control " name="prod_name"  >
		  Category:<select class="form-control" name="select_cat">
		  <option >--Select--</option>
		  <?php 
		  $fetch_cat=mysql_query("select id, category_name from product_category");
		  while($fetch_cat1=mysql_fetch_array($fetch_cat))
		  {
		  ?>		  
		  <option value="<?php echo $fetch_cat1['id'];?>"><?php echo $fetch_cat1['category_name'];?></option>
		  <?php } ?>
		  </select>
		  Sub Category:<select class="form-control" name="select_sub_cat">
		  <option >--Select--</option>
		  <?php 
		  $fetch_sub_cat=mysql_query("select id, prod_subcategory from  prod_subcategory");
		  while($fetch_sub_cat1=mysql_fetch_array($fetch_sub_cat))
		  {
		  ?>		  
		  <option value="<?php echo $fetch_sub_cat1['id'];?>"><?php echo $fetch_sub_cat1['prod_subcategory'];?></option>
		  <?php } ?>
		  </select>
		  Product Image:<input name="prod_image" id="prod_image" class="form-control " type="file">
		  Model No.<input type="text" class="form-control " name="model_num"  >
		  Size:<input type="text" class="form-control " name="size"  >
Description:<textarea class="form-control" name="desc" ></textarea>
Specification:<textarea class="form-control" name="spec" ></textarea>
<input type="submit" class="btn btn-default pull-right submit_btn" name="add_prod" value="Save" >
        </div>
		</form>
		</div>
      </div>     
    </div>
  </div>
  <!-- end Add Model -->
  </div>

    <div>
	<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Product Id</th>
	<th>Email Id</th>
	<th>Contact</th>
	<th>City</th>
	<th>Message</th>
	<th>Time</th>
	</tr>
	<?php 
	$fetch_manage_prod=mysql_query("select * from enquiry_table");
	while($fetch_manage_prod1=mysql_fetch_array($fetch_manage_prod))
	{
		extract($fetch_manage_prod1);
	?>
	<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo  $name;?></</td>
	<td><?php echo $product_id; ?></td>
	<td><?php echo $email_id; ?></td>
	<td><?php echo $contact_num; ?></</td>
	<td><?php echo $city; ?></</td>
	<td><?php echo $message; ?></</td>
	<td><?php echo $time_date; ?></</td>
	</tr>
	<?php } ?>
	</table>
	</div>
    <?php include 'includes/foot.php'; ?>
  </body>
</html>
