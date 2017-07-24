<?php	
$conn=mysql_connect("localhost","root","");
mysql_select_db("voyy",$conn);
$fetch_images='';
if(isset($_GET['category_id']))
{
if(isset($_GET['cat_type']))
{
	$fetch_sub_id=mysql_query("select id from prod_subcategory where prod_subcategory='".$_GET['cat_type']."' and category_id='".$_GET['category_id']."'");
	$fetch_sub_id1=mysql_fetch_array($fetch_sub_id);
$fetch_images = mysql_query("select * from manage_product where sub_cat_id='".$fetch_sub_id1['id']."'", $conn);
?>
<script></script>
<?php
}
else
{
$fetch_images = mysql_query("select * from manage_product where category_id='".$_GET['category_id']."' ", $conn);
}
}
else
{
$fetch_images = mysql_query("select * from manage_product",$conn);
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
	<script>
	function modal_value(image_id)
	{
		window.location="category.php?image_id="+image_id;
	}
	</script>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
     <section class="top_banner">
       <img src="images/category-banner-bg2.jpg" class="img-responsive" alt="category-banner-bg" width=" " height=" " />
       <div class="caption">
        <h1 class="tittle">Our Shop</h1>
        <p>Something different, every day.</p>
       </div>
        <!-- <div class="bread_caption">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Our Shpp</li>
          </ul>
        </div> -->
     </section>
	
	 <?php $fetch_product_category=mysql_query("select id, category_name from product_category");
	 ?>
     <section class="archive_categories">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="category_box clearfix text-center">
                <ul>
				<?php while($fetch_product_category1=mysql_fetch_array($fetch_product_category)) {?>
                  <li  id="active<?php echo $fetch_product_category1['id'] ?>" onClick ="absd(<?php echo $fetch_product_category1['id'] ?>);">
<a href="category.php?con=3&category_id=<?php echo $fetch_product_category1['id'] ?>">				  
                      <!--<div class="category_icon"><img src="images/cellphones.jpg" alt=""></div>-->
                      <div class="content"><?php echo $fetch_product_category1['category_name']; ?></div>
                   </a>
                  </li>
              
				<?php } ?>
                </ul>
              </div>
           </div>
         </div>
       </div>
     </section>
	 
     <section class="pro_category">
       <div class="container">
         <div class="row">
           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
             <div class="side_category">
               <div class="heading">
                 <h2 class="title">Product Categories</h2>
               </div>
			   <?php 
			   if(isset($_GET['category_id']))
			   {
			   if($_GET['category_id']==2){ 
			   ?>
			  
               <ul class="category_list">
                  <li>
				  <a href="category.php?category_id=2" style="cursor:pointer; text-decoration:none"><div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">All</h3>
                      </div>                      
                    </div></a>
                 </li>
				 <?php $fetch_sub_category=mysql_query("select * from prod_subcategory where category_id='".$_GET['category_id']."'");
				 while($fetch_sub_category1=mysql_fetch_array($fetch_sub_category))
				 {
					 extract($fetch_sub_category1);
				 ?>
                 <li>

                    <a href="category.php?cat_type=<?php echo $prod_subcategory; ?>&category_id=2" style="cursor:pointer; text-decoration:none">
					<div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $prod_subcategory; ?></h3>             
                    </div></div></a>
                 </li> 
				 <?php } ?>
               </ul>
			   <?php } ?>
			   <?php if($_GET['category_id']==1){ ?>
               <ul class="category_list">
                  <li>
				  <a href="category.php?category_id=1" style="cursor:pointer; text-decoration:none"><div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">All</h3>
                      </div>                     
                    </div></a>
                 </li>
<?php $fetch_sub_category=mysql_query("select * from prod_subcategory where category_id='".$_GET['category_id']."'");
				 while($fetch_sub_category1=mysql_fetch_array($fetch_sub_category))
				 {
					 extract($fetch_sub_category1);
				 ?>
                 <li>

                    <a href="category.php?cat_type=<?php echo $prod_subcategory; ?>&category_id=1" style="cursor:pointer; text-decoration:none">
					<div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $prod_subcategory; ?></h3>             
                    </div></div></a>
                 </li> 
				 <?php } ?>				 
               </ul>
			   <?php } 
			   if($_GET['category_id']==3) { ?>
			   <ul class="category_list">
                  <li>
				  <a href="category.php?con=3&category_id=3" style="cursor:pointer; text-decoration:none"><div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">All</h3>
                      </div>                      
                    </div></a>
                 </li>
				 <?php $fetch_sub_category=mysql_query("select * from prod_subcategory where category_id='".$_GET['category_id']."'");
				 while($fetch_sub_category1=mysql_fetch_array($fetch_sub_category))
				 {
					 extract($fetch_sub_category1);
				 ?>
                 <li >

                    <a href="category.php?con=3&cat_type=<?php echo $prod_subcategory; ?>&category_id=3" style="cursor:pointer; text-decoration:none">
					<div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $prod_subcategory; ?></h3>             
                    </div></div></a>
                 </li> 
				 <?php } ?>
               </ul>
			   <?php }}
			   else
			   { ?>
				<ul class="category_list">
                  <li class="active">
				  <a href="category.php?cat_type=All" style="cursor:pointer; text-decoration:none">
				  <div class="panel panel-primary active">
                      <div class="panel-heading">
                        <h3 class="panel-title">All</h3>
                      </div>                      
                    </div></a>
                 </li>                
               </ul>   
			   <?php }
			   ?>			   
             </div>
           </div>
           <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
             <div class="row">
                <div class="pro_block clearfix">
				<?php while($fetch_images1=mysql_fetch_array($fetch_images))
		   {
		
			   extract($fetch_images1);
			   ?>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-4 col_480_10">
                   <div class="block">
                     <a onClick="modal_value(<?php echo $id ?>)" >
					 <?php echo "<img src='images/pro/".$prod_image."' class='img-responsive'>"; ?>
					 <!--<img src="images/pro/symphony-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " >--></a>
                     <div class="pro_caption">
                      <div class="pro_tittle"><a href="javascript:void(0);"><?php echo  $prod_name; ?></a></div>
                      <div class="pro_brand"><a href="javascript:void(0);"><?php echo  $model_num; ?></a></div>
					  <div class="pro_brand"><a href="javascript:void(0);"><?php echo  $prod_size; ?></a></div>
                    </div>
                   </div>
                 </div>
		   <?php } ?>
                   </div>
                 </div>
                 <div class="clearfix hidden-sm hidden-xs"></div>
               </div>
             </div>
           </div>
		   
         </div>
       </div>
     </section>

<!-- Modal -->
<?php
if(isset($_GET['image_id']))
{
	$image_info=mysql_query("select * from manage_product where id='".$_GET['image_id']."'");
	$image_info1=mysql_fetch_array($image_info);
	extract($image_info1);
	?>
		 <div id="pro_detail_modal" class="modal show" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="wrapper left_sec">
              <div class="image">
                <?php echo "<img src='images/pro/".$prod_image."' class='img-responsive'>"; ?>
              </div>
              
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="wrapper left_sec">
              <h5 class="pro_name"><?php echo $prod_name; ?></h5>
              <p class="modal_name"><?php echo $model_num;?></p>
			  <p class="modal_name"><?php echo $prod_size;?></p>
              <div class="pro_info">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Specification</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <p><?php echo $description; ?></p>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="profile">
                    <p><?php echo $specification; ?></p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <form action="prod_enquiry.php" method="POST" class="pro_form">
                <h5 class="sec_title">Enquiry Now</h5>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" name="enq_name" placeholder="Name*"/>
                  </div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="form-group">
                      <input type="text" class="form-control" name="enq_email" placeholder="Email id*"/>
                    </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="enq_contact" placeholder="Contact*"/>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="enq_city" placeholder="City*"/>
                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <textarea placeholder="Message" name="enq_message" class="textarea form-control" name="message" maxlength="300" rows="8" cols="20"></textarea>
						<input type="hidden" name="page_name" value="category">
						<input type="hidden" name="prod_enq_id" value="<?php echo $_GET['image_id']?>">
                      </div>
                   </div>
                </div> 
				<input type="submit" name="submit" class="btn btn-default" value="Submit" />
              <input type="button" class="btn btn-default pull-right" onClick="popclose()" value="Close" />
              </form>
              
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php } ?>

    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/foot.php'; ?>
	<script>
function popclose()
{
	$('#pro_detail_modal').removeClass('show');
}
</script>
    <script>
      $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
  if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
  } else {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.removeClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
  }
})
    </script>
    <script>
      //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    </script>
	 <script>
	 function absd(test)
	 {	 
	/* window.location="category.php?category_id="+test; */
	$('.active').removeClass("active");
		 $('#active'+test).addClass("active");
		 
	 }
		 </script>
  </body>

</html>
