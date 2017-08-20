<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Shop UI</title>

@include('./includes.styleheader')
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN TOP BAR -->
    @include('./includes.topmenu')
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
     @include('./includes.header')    
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
    @include('./includes.slider') 
    <!-- END SLIDER -->


    <div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        @include('./includes.salesproductandnew') 
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
        <!-- BEGIN SIDEBAR & CONTENT -->
        @include('./includes.sidebarcontent') 
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        @include('./includes.twoproduct') 
        
        <!-- END TWO PRODUCTS & PROMO -->
      </div>
    </div>

    <!-- BEGIN BRANDS -->
    <!--@include('./includes.brands') -->
    <!-- END BRANDS -->




    <!-- BEGIN STEPS -->
    <!--@include('./includes.steps') -->
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    <!--<div class="pre-footer">
      <div class="container">
        <div class="row">-->
                                                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                                                        <!--<div class="col-md-3 col-sm-6 pre-footer-col">
                                                            <h2>About us</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                                                            <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                                                        </div>-->
                                                <!-- END BOTTOM ABOUT BLOCK -->
                                                
                                                
                                                
                                                
                                                <!-- BEGIN BOTTOM INFO BLOCK -->
                                                            <!--<div class="col-md-3 col-sm-6 pre-footer-col">
                                                                <h2>Information</h2>
                                                                <ul class="list-unstyled">
                                                                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
                                                                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
                                                                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
                                                                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
                                                                <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                                                                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
                                                                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
                                                                </ul>
                                                            </div>-->
                                                <!-- END INFO BLOCK -->




                                                <!-- BEGIN TWITTER BLOCK --> 
                                                        <!--<div class="col-md-3 col-sm-6 pre-footer-col">
                                                            <h2 class="margin-bottom-0">Latest Tweets</h2>
                                                            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>      
                                                        </div>-->
                                                <!-- END TWITTER BLOCK -->

                                                <!-- BEGIN BOTTOM CONTACTS -->
                                                            <!--<div class="col-md-3 col-sm-6 pre-footer-col">
                                                                <h2>Our Contacts</h2>
                                                                <address class="margin-bottom-40">
                                                                35, Lorem Lis Street, Park Ave<br>
                                                                California, US<br>
                                                                Phone: 300 323 3456<br>
                                                                Fax: 300 323 1456<br>
                                                                Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                                                                Skype: <a href="skype:metronic">metronic</a>
                                                                </address>
                                                            </div>-->
                                                <!-- END BOTTOM CONTACTS -->
        <!--</div>
        <hr>
        <div class="row">-->
                                                                            <!-- BEGIN SOCIAL ICONS -->
                                                                       
                                                                              
                                                                             <!-- include('./includes.social') -->
                                                                             
                                                                             
                                                                              


                                                                            <!-- END SOCIAL ICONS -->






                                                                            <!-- BEGIN NEWLETTER -->
                                                                                            <!--<div class="col-md-6 col-sm-6">
                                                                                                <div class="pre-footer-subscribe-box pull-right">
                                                                                                <h2>Newsletter</h2>
                                                                                                <form action="#">
                                                                                                    <div class="input-group">
                                                                                                    <input type="text" placeholder="youremail@mail.com" class="form-control">
                                                                                                    <span class="input-group-btn">
                                                                                                        <button class="btn btn-primary" type="submit">Subscribe</button>
                                                                                                    </span>
                                                                                                    </div>
                                                                                                </form>
                                                                                                </div> 
                                                                                            </div>-->
                                                                            <!-- END NEWLETTER -->
        <!--</div>
      </div>
    </div>-->
    <!-- END PRE-FOOTER -->









  




    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="assets/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2>Cool green dress with red bell</h2>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->




  <!-- BEGIN FOOTER -->
     @include('./includes.footer') 
    <!-- END FOOTER -->




    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
  
  
  @include('./includes.scripts')
  


    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>