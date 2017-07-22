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
if(isset($_POST["add_prod"]))
{
	extract($_POST);
	mysql_query("insert into manage_product set prod_name='$prod_name', prod_size='$size', category_id='$select_cat', sub_cat_id='$select_sub_cat', model_num='$model_num', specification='$spec',  description='$desc', date=now()", $conn);
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
	  <form action="" method="POST">
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
  
  
  <div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<input type="submit" class="btn btn-default pull-left submit_btn" name="add" onClick="addproduct()" value="Add Product">
		</div>
		<!--<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<input type="text" class="form-control" style="margin:20px;" name="search_prod"  Placeholder="Product Name">
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="button" class="btn btn-default pull-left submit_btn" style="margin:20px;" name="search" value="Go" >
		</div>-->
	</div>
  </div>

    <div>
	<table>
	<tr>
	<th>ID</th>
	<th>Product Name</th>
	<th>Category</th>
	<th>Sub Category</th>
	<th>Size</th>
	<th>Model No.</th>
	<th>Description</th>
	<th>Specification</th>
	<th>Action</th>
	</tr>
	<?php 
	$fetch_manage_prod=mysql_query("select * from manage_product");
	while($fetch_manage_prod1=mysql_fetch_array($fetch_manage_prod))
	{
		extract($fetch_manage_prod1);
	?>
	<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo  $prod_name;?></</td>
	<?php $fetch_catname=mysql_query("SELECT category_name from product_category where id = '$category_id'", $conn);
	$fetch_catname1=mysql_fetch_array($fetch_catname);?>
	<td><?php echo $fetch_catname1['category_name']; ?></td>
	<?php $fetch_subcat=mysql_query("SELECT prod_subcategory from prod_subcategory where id = '$sub_cat_id'", $conn);
	$fetch_subcat1=mysql_fetch_array($fetch_subcat); ?>
	<td><?php echo $fetch_subcat1['prod_subcategory']; ?></td>
	<td><?php echo $prod_size; ?></</td>
	<td><?php echo $model_num; ?></</td>
	<td><?php echo $description; ?></</td>
	<td><?php echo $specification; ?></</td>
	<td class="text-center">
	<a onClick="edit(<?php echo $id; ?>)"><i class="fa fa-pencil-square-o" style="font-size:30px;cursor:pointer;margin:2px" aria-hidden="true"></i></a>
	<a href="product_delete.php?prod_del_id=<?php echo $id; ?>"><i class="fa fa-trash" aria-hidden="true"style="font-size:30px;cursor:pointer; margin:2px"></i></a> 	
	</td>
	</tr>
	<?php } ?>
	</table>
	</div>
    <?php include 'includes/foot.php'; ?>
  </body>
</html>
