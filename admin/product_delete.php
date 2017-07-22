<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: admin_login.php");
exit;
}
?>
<?php
if(isset($_GET["cat_delete_id"]))
{
	$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
$query=mysql_query("update product_category set status='' where id='".$_GET["cat_delete_id"]."'", $conn);
?>
<script> window.location="product_category.php"; </script>
<?php
}

if(isset($_GET["subcat_del_id"]))
{
	$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
$query=mysql_query("update prod_subcategory set status='' where id='".$_GET["subcat_del_id"]."'", $conn);
?>
<script> window.location="prod_subcategory.php"; </script>
<?php
}

if(isset($_GET["prod_del_id"]))
{
	$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
$query=mysql_query("delete from manage_product where id='".$_GET["prod_del_id"]."'", $conn);
?>
<script> window.location="manage_product.php"; </script>
<?php
}
?>