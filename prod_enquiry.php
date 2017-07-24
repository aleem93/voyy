<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);

if($_POST['page_name']=='category')
{
	
extract($_POST);

$put_enquiry=mysql_query("insert into enquiry_table set name='$enq_name',product_id=' $prod_enq_id', email_id='$enq_email', contact_num='$enq_contact', city='$enq_city', message='$enq_message', time_date=now(), page='$page_name'");	
?>
<script>window.location="category.php";</script>
<?php
}

if($_POST['page_name']=='footer')
{
	
extract($_POST);

$put_enquiry=mysql_query("insert into enquiry_table set name='$enq_name',product_id='',city='$enq_city', email_id='$enq_email', contact_num='$enq_contact', message='$enq_message', time_date=now(), page='$page_name'");	
?>
<script>window.location="category.php";</script>
<?php
}
if($_POST['page_name']=='index')
{
	
extract($_POST);

$put_enquiry=mysql_query("insert into enquiry_table set name='$enq_name',product_id='',city='$enq_city', email_id='$enq_email', contact_num='$enq_contact', message='$enq_message', time_date=now(), page='$page_name'");	
?>
<script>window.location="category.php";</script>
<?php
}

if($_POST['page_name']=='contact_us')
{	
extract($_POST);

$put_enquiry=mysql_query("insert into enquiry_table set name='$enq_name',product_id='',city='$enq_city', email_id='$enq_email', contact_num='$enq_contact', message='$enq_message', time_date=now(), page='$page_name'");	
?>
<script>window.location="contact-us.php";</script>
<?php
}

