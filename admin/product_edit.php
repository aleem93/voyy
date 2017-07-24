<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: admin_login.php");
exit;
}
?>
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
if(isset($_POST["cat_edit"]))
{
	extract($_POST);
	mysql_query("update product_category set category_name='$cat_name', description='$description', created_at=now() where id='".$_GET['cat_id']."'", $conn);
?>
<script >
window.location="dash_category.php";
</script>
<?php	
}

if(isset($_POST["subcat_edit"]))
{
	extract($_POST);
	mysql_query("update prod_subcategory set prod_subcategory='$subcat_name',category_id='$select_cat', description='$sub_desc', created_at=now() where id='".$_GET['subcat_id']."'", $conn);
?>
<script >
window.location="dash_subcategory.php";
</script>
<?php	
}

if(isset($_POST["prod_add"]))
{
	extract($_POST);
	$target_dir = "../images/pro/";
$target_file = $target_dir.$_FILES['prod_image']['name'];
 move_uploaded_file($_FILES['prod_image']['tmp_name'], $target_file);
	mysql_query("update manage_product set prod_image='".$_FILES['prod_image']['name']."', prod_name='$prod_name', prod_size='$size', category_id='$select_cat', sub_cat_id='$select_sub_cat', model_num='$model_num', description='$desc', specification='$spec',date=now() where id='".$_GET['product_id']."'", $conn);
?>
<script >
window.location="dash_manage_product.php";
</script>
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
	th{
		width:25%;
		height:25px;
		text-align:center; 
		border:1px solid black
	}
	input[type="submit"]
	{
		margin:20px
	}
	td{
		text-align:center
	}
	</style>
	
	<script>
	$(window).load(function(){
        $('#editModal').modal('show');
    });
	</script>
      </head>
  <body class="home" style="background-color:#333;">
  <div class="container">
<!-- Edit Modal -->
<?php if(isset($_GET['cat_id']))
	{?>
  <div class="modal show" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Category Modal content-->
      <div class="modal-content">
	  <form action="" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Category</h4>
        </div>		
        <div class="modal-body clearfix">
        <?php 
	$edit_query=mysql_query("SELECT * from product_category where id='".$_GET['cat_id']."'", $conn);
	while($edit_query1=mysql_fetch_array($edit_query))
	{
	?>
		  Category Name:<input type="text" class="form-control " name="cat_name" value="<?php echo $edit_query1['category_name'] ;?>" >
Description:<textarea class="form-control" name="description" ><?php echo $edit_query1['description'] ;?></textarea>
	<?php } ?>
<input type="submit" class="btn btn-default pull-right submit_btn" name="cat_edit" value="Save" >
        </div>
		</form>
		</div>
      </div>     
    </div>
  </div>
  <!-- end Category Edit Model -->
	<?php } ?>
	<!--Sub Category Edit Model -->
	<?php if(isset($_GET['subcat_id']))
	{?>
  <div class="modal show" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <form action="" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Sub Category</h4>
        </div>		
        <div class="modal-body clearfix">
        <?php 
	$edit_query=mysql_query("SELECT * from prod_subcategory where id='".$_GET['subcat_id']."'", $conn);
	while($edit_query1=mysql_fetch_array($edit_query))
	{
	?>
		  Sub Category Name:<input type="text" class="form-control " name="subcat_name" value="<?php echo $edit_query1['prod_subcategory'] ;?>" >
		  Category<select name="select_cat" class="form-control ">
		  <option >--Select--</option>
		  <?php
		  $sub_cat=mysql_query("select * from product_category", $conn);
		  while($sub_cat1=mysql_fetch_array($sub_cat))
		  {
		  ?>		  
		  <option <?php if($sub_cat1['id']==$edit_query1['category_id']) {  echo"selected"; } ?> value="<?php echo $sub_cat1['id'];?>"><?php echo $sub_cat1['category_name'];?></option>
		  <?php } ?>
		  </select>
Description:<textarea class="form-control" name="sub_desc" ><?php echo $edit_query1['description'] ;?></textarea>
	<?php } ?>
<input type="submit" class="btn btn-default pull-right submit_btn" name="subcat_edit" value="Save" >
        </div>
		</form>
		</div>
      </div>     
    </div>
  <!-- end Sub Category Edit Model -->
	<?php } ?>
	
		<!--Product Edit Model -->
	<?php 
	
	if(isset($_GET['product_id']))
	{
		
		$prod_id=$_GET['product_id'];
		
		?>
  <div class="modal show" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Product Details
		 
		  </h4>
        </div>		
        <div class="modal-body clearfix">
		<?php  
		$fetch_product=mysql_query("select * from manage_product 
		where id='$prod_id'");
		while($fetch_product1=mysql_fetch_array($fetch_product))
		{
		?>
		  Product Name:<input type="text" class="form-control " name="prod_name" value="<?php echo $fetch_product1['prod_name']; ?>" >
		  Category:<select class="form-control" name="select_cat">
		  <option >--Select--</option>
		  <?php 
		  $fetch_cat=mysql_query("select id, category_name from product_category");
		  while($fetch_cat1=mysql_fetch_array($fetch_cat))
		  {
		  ?>		  
		  <option <?php if($fetch_product1['category_id']==$fetch_cat1['id']){ ?> selected <?php } ?> value="<?php echo $fetch_cat1['id'];?>"><?php echo $fetch_cat1['category_name'];?></option>
		  <?php } ?>
		  </select>
		  Sub Category:<select class="form-control" name="select_sub_cat">
		  <option >--Select--</option>
		  <?php 
		  $fetch_sub_cat=mysql_query("select id, prod_subcategory from  prod_subcategory");
		  while($fetch_sub_cat1=mysql_fetch_array($fetch_sub_cat))
		  {
		  ?>		  
		  <option <?php if($fetch_product1['sub_cat_id']==$fetch_sub_cat1['id']){ ?> selected <?php } ?> value="<?php echo $fetch_sub_cat1['id'];?>"><?php echo $fetch_sub_cat1['prod_subcategory'];?></option>
		  <?php } ?>
		  </select>
		  Product Image:<input name="prod_image" id="prod_image" class="form-control " type="file">
		  Model No.<input type="text" class="form-control " name="model_num" value="<?php echo $fetch_product1['model_num']; ?>" >
		  Size:<input type="text" class="form-control " name="size" value="<?php echo $fetch_product1['prod_size']; ?>" >
Description:<textarea class="form-control" name="desc" ><?php echo $fetch_product1['description']; ?></textarea>
Specification:<textarea class="form-control" name="spec" ><?php echo $fetch_product1['specification']; ?> </textarea>
<input type="submit" class="btn btn-default pull-right submit_btn" name="prod_add" value="Save">  
		<?php } ?>      
</div>
		</form>
		</div>
      </div>     
    </div>
  <!-- end Product Edit Model -->
	<?php } ?>
    <?php include 'includes/foot.php'; ?>
  </body>
</html>
