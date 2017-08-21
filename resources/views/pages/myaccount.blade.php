<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.admin.header')
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ url('/').'/images/img.jpg'}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             @include('includes.admin.adminmenu')
            <!-- /sidebar menu -->














            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->



            
          </div>
        </div>

        <!-- top navigation -->

      @include('includes.admin.topmenu')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
         
         
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Account</h2>
              

                <ul class="nav navbar-right panel_toolbox">
                  

     
                 <!--<div class="x_content">
                  <a href="{{route('CBrands')}}" type="button" class="btn btn-success">Create</a>
                  <a href="#" type="button" class="btn btn-warning">Edit</a>
                  <a href="#" type="button" class="btn btn-danger">Delete</a>
                 </div>-->







                    </ul>









                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
  
                      Here Disply Data



                  </div>
                </div>
              </div>
            </div>




        </div>
        <!-- /page content -->

        <!-- footer content -->
      @include('includes.admin.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    @include('includes.admin.scripts')
	
  </body>
</html>
