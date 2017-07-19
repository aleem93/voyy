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
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack1&render=explicit" async defer></script>
    <script>
    var recaptchaCont;
    var recaptchaEnq1;
    var myCallBack1 = function()
    {
        //Render the recaptchaMail on the element with ID "recaptchaMail"
        if( $('div[id="recaptchaCont"]').length )
        {
            recaptchaCont = grecaptcha.render('recaptchaCont', {
              'sitekey' : '6LfeSh0UAAAAAP9AxTZFAy0yS0A1QlhRQHNyrbBd' //Replace this with your Site key
            });
        }
        //alert($('div[id="recaptchaEnq"]').length );
        //Render the recaptchaDelete on the element with ID "recaptchaDelete"
        if( $('div[id="recaptchaEnq1"]').length )
        {
            recaptchaEnq1 = grecaptcha.render('recaptchaEnq1', {
              'sitekey' : '6LfeSh0UAAAAAP9AxTZFAy0yS0A1QlhRQHNyrbBd' //Replace this with your Site key
            });
        }
    };
</script>
  </head>
  <body class="home">
    <?php include 'includes/header.php'; ?>
     <section class="home_banner">
        <div class="owl-carousel owl-theme main_slider">
          <div class="item"><img src="images/banner2.jpg" class="img-responsive" alt="banner" width=" " height=" " ></div>
          <div class="item"><img src="images/banner3.jpg" class="img-responsive" alt="banner" width=" " height=" " ></div>
          <div class="item"><img src="images/banner1.jpg" class="img-responsive" alt="banner" width=" " height=" " ></div>
        </div>
     </section>
     <section class="home_about">
       <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="sec_wrapper">
               <div class="header">
                 <h3 class="title">About The Brand</h3>
               </div>
               <div class="content">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo et dolore magn aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                 <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia is be deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit. voluptatem accusantium doloremque laudantium,</p>
                 <p>totam remes aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam.</p>
               </div>
             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="sec_wrapper bg_image">
              <img src="images/about-brand-bg.png" class="img-responsive" alt="about-brand-bg" width=" " height=" " />
            </div>
          </div>
        </div>
       </div>
     </section>
     <section class="home_pro">
       <div class="container">
         <div class="sec_wrapper">
           <div class="header">
             <h3 class="title">Featured Product</h3>
           </div>
           <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="pro_block clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_480_10">
                   <div class="block">
                     <a href="javascript:void(0);" data-toggle="modal" data-target="#pro_enquiry_modal"><img src="images/pro/symphony-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                     <div class="pro_caption">
                      <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                      <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                    </div>
                   </div>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_480_10">
                   <div class="block">
                     <a href="javascript:void(0);"><img src="images/pro/sony-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                      <div class="pro_caption">
                        <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                        <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                      </div>
                   </div>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_480_10">
                   <div class="block">
                     <a href="javascript:void(0);"><img src="images/pro/htc-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                      <div class="pro_caption">
                        <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                        <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                      </div>
                   </div>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_480_10">
                   <div class="block">
                     <a href="javascript:void(0);"><img src="images/pro/xperia-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                      <div class="pro_caption">
                        <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                        <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                      </div>
                   </div>
                 </div>
                 <div class="clearfix hidden-sm hidden-xs"></div>
                </div>
              </div>
            </div>
          </div>
           <!-- <div class="content">
            <div class="owl-carousel owl-theme home_new_pro">
              <div class="item">
                <div class="block">
                  <a href="javascript:void(0);"><img src="images/pro/symphony-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                </div>
                  <div class="pro_caption">
                    <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                    <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                  </div>
              </div>
              <div class="item">
                <div class="block">
                  <a href="javascript:void(0);"><img src="images/pro/sony-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                </div>
                <div class="pro_caption">
                  <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                  <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                </div>
              </div>
              <div class="item">
                <div class="block">
                  <a href="javascript:void(0);"><img src="images/pro/htc-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                </div>
                <div class="pro_caption">
                  <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                  <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                </div>
              </div>
              <div class="item">
                <div class="block">
                  <a href="javascript:void(0);"><img src="images/pro/xperia-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                </div>
                <div class="pro_caption">
                  <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                  <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                </div>
              </div>
              <div class="item">
                <div class="block">
                  <a href="javascript:void(0);"><img src="images/pro/walton-pro.jpg" class="img-responsive" alt="banner" width=" " height=" " ></a>
                </div>
                <div class="pro_caption">
                  <div class="pro_tittle"><a href="javascript:void(0);">Smart Phone</a></div>
                  <div class="pro_brand"><a href="javascript:void(0);">Symphony</a></div>
                </div>
              </div>
            </div>
           </div> -->
         </div>
       </div>
     </section>

<!-- Modal -->
<div id="pro_enquiry_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enquiry Now</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
              <input type="text" class="form-control" placeholder="Name*"/>
            </div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <div class="form-group">
                <input type="text" class="form-control" placeholder="Email id*"/>
              </div>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Contact*"/>
                </div>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <textarea placeholder="Message" class="textarea form-control" name="message" maxlength="300" rows="8" cols="20"></textarea>
                </div>
             </div>
          </div> 
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left submit_btn">Submit</button>
        <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
















    
    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/foot.php'; ?>
  </body>
</html>
