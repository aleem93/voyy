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
if(isset($_POST["add_subprod"]))
{
	extract($_POST);
	mysql_query("insert into prod_subcategory set prod_subcategory='$subcat_name',category_id='$select_cat', description='$desc',status='A', created_at=now()", $conn);
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
		width:20%;padding:2px;
		height:30px;
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
	function addproduct()
	{
		        $('#myModal').modal('show');

	}
	function edit(subcat_id)
	{
		window.location="product_edit.php?subcat_id="+subcat_id;
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
          <h4 class="modal-title">Add Sub Category</h4>
        </div>		
        <div class="modal-body clearfix">
        <div class="form-group">
		  Sub Category Name:<input type="text" class="form-control " name="subcat_name"  ></div>
		  <div class="form-group">
		  Category<select name="select_cat" class="form-control ">
		  <option >--Select--</option>
		  <?php
		  $sub_cat=mysql_query("select * from product_category", $conn);
		  while($sub_cat1=mysql_fetch_array($sub_cat))
		  {
		  ?>		  
		  <option value="<?php echo $sub_cat1['id'];?>"><?php echo $sub_cat1['category_name'];?></option>
		  <?php } ?>
		  </select></div>
Description:<textarea class="form-control" name="desc" ></textarea>

<input type="submit" class="btn btn-default pull-right submit_btn" name="add_subprod" value="Save" >
        </div>
		</form>
		</div>
      </div>     
    </div>
  </div>
  <!-- end Add Model -->
  <input type="submit" class="btn btn-default pull-left submit_btn" onClick="addproduct()" name="add" value="Add Sub Category">
    <div>
	<table>
	<tr>
	<th>ID</th>
	<th>Sub Category</th>
	<th>Category</th>
	<th>Description</th>
	<th>Action</th>
	</tr>
	<?php 
	$query=mysql_query("SELECT * from prod_subcategory where status='A' order by created_at desc", $conn);
	while($query1=mysql_fetch_array($query))
	{
		extract($query1);
	?>
	<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $prod_subcategory;?></td>
	<?php $fetch_catname=mysql_query("SELECT category_name from product_category where id = '$category_id'", $conn);
	$fetch_catname1=mysql_fetch_array($fetch_catname);?>
	<td><?php echo $fetch_catname1['category_name']; ?></td>
	<td><?php echo $description; ?></td>
	<td class="text-center">
	<a onClick="edit(<?php echo $id; ?>)"><i class="fa fa-pencil-square-o" style="font-size:30px;cursor:pointer;margin:2px" aria-hidden="true"></i></a>
	<a href="product_delete.php?subcat_del_id=<?php echo $id; ?>"><i class="fa fa-trash" aria-hidden="true"style="font-size:30px;cursor:pointer; margin:2px"></i></a> 
	</td>
	</tr>
	<?php } ?>
	</table>
	</div>
    <?php include 'includes/foot.php'; ?>
  </body>
</html>
