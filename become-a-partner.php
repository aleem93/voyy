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
  </head>
  <body class="partner">
    <?php include 'includes/header.php'; ?>
     <section class="top_banner">
       <img src="images/category-banner-bg2.jpg" class="img-responsive" alt="category-banner-bg" width=" " height=" " />
       <div class="caption">
        <h1 class="tittle">Become a Partner</h1>
        <p>Something different, every day.</p>
       </div>
     </section>
     <section class="archive_categories">
       <div class="container">
         <div class="row">
           <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <div class="category_box clearfix">
                <form class="pro_form" action="prod_enquiry.php" method="POST">
                  <h5 class="sec_title">Get In Touch</h5>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col_480_12">
                      <div class="form-group">
                      <input type="text" class="form-control" name="enq_name" placeholder="Name*"/>
                    </div>
                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col_480_12">
                       <div class="form-group">
                        <input type="text" class="form-control" name="enq_email" placeholder="Email id*"/>
                      </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col_480_12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="enq_contact" placeholder="Contact*"/>
						  <input type="hidden" name="page_name" value="contact_us">
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col_480_12">
                        <div class="form-group">
                          <input type="text"  name="enq_city" class="form-control" placeholder="City*"/>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <textarea placeholder="Message" class="textarea form-control" name="enq_message" maxlength="300" rows="8" cols="20"></textarea>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <button type="submit" class="btn btn-default pull-left submit_btn"  name="submit">Submit</button>
                     </div>
                  </div> 
                </form>
              </div>
           </div>
         </div>
       </div>
     </section><br><br>


    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/foot.php'; ?>
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
  </body>

</html>
