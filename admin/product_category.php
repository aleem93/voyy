
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
if(isset($_POST["add_prod"]))
{
	extract($_POST);
	
	mysql_query("insert into product_category set category_name='$cat_name', description='$description',status='A', created_at=now()", $conn);
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
	function addproduct()
	{
		        $('#myModal').modal('show');

	}
	function edit(cat_id)
	{
		
		window.location="product_edit.php?cat_id="+cat_id;
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
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>		
        <div class="modal-body clearfix">
        
		  Category Name:<div class="form-group"><input type="text" class="form-control " name="cat_name"  ></div>
Description:<textarea class="form-control" name="description" ></textarea>

<input type="submit" class="btn btn-default pull-right submit_btn" name="add_prod" value="Save" >
        </div>
		</form>
		</div>
      </div>     
    </div>
  </div>
  <!-- end Add Model -->
  
  <!-- Edit Modal -->
  
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <form action="" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Product</h4>
        </div>		
        <div class="modal-body clearfix">
        <?php 
	$edit_query=mysql_query("SELECT * from product_category where id='".$_GET['cat_id']."'", $conn);
	while($edit_query1=mysql_fetch_array($edit_query))
	{
	?>
		  Category Name:<input type="text" class="form-control " name="cat_name" value="<?php echo $edit_query1['category_name'] ;?>" >
Description:<textarea class="form-control" name="description" value="<?php echo $edit_query1['description'] ;?>"></textarea>
	<?php } ?>
<input type="submit" class="btn btn-default pull-right submit_btn" name="add_prod" value="Save" >
        </div>
		</form>
		</div>
      </div>     
    </div>
  </div>
  <!-- end Edit Model -->
  
  
  
  <!--<input type="submit" class="btn btn-default pull-left submit_btn" onClick="addproduct()" name="add" value="Add Category">-->
    <div>
	<table>
	<tr>
	<th>ID</th>
	<th>Category Name</th>
	<th>Description</th>
	<th>Action</th>
	</tr>
	<?php 
	$query=mysql_query("SELECT * from product_category where status='A' order by id asc", $conn);
	while($query1=mysql_fetch_array($query))
	{
		extract($query1);
	?>
	<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $category_name; ?></td>
	<td><?php echo $description; ?></td>
	<td class="text-center">
	<a onClick="edit(<?php echo $id; ?>)"><i class="fa fa-pencil-square-o" style="font-size:30px;cursor:pointer;margin:2px" aria-hidden="true"></i></a>
	<a href="product_delete.php?cat_delete_id=<?php echo $id; ?>"><i class="fa fa-trash" aria-hidden="true"style="font-size:30px;cursor:pointer; margin:2px"></i></a> 
	</td>
	</tr>
	<?php } ?>
	</table>
	</div>
    <?php include 'includes/foot.php'; ?>
  </body>
</html>
