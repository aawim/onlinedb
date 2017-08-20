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
                    <h2>Insert Brands </h2>
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    

<form data-parsley-validate class="form-horizontal form-label-left" action="{{route('SBrands')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brand Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="BrandName" name="BrandName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Description" name="Description" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
               
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Visibility</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="visibility" name="visibility" class="btn-group" data-toggle="buttons">
                           <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat" checked="checked"> Checked
                            </label>
                          </div>
                          </div>
                        </div>
                      </div>



                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Images">Image <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" class="form-control" id="image_file" name="image_file" required>
                    </div>
                      </div>

                
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          

                          <a href="{{url('/dashboard')}}" class="btn btn-primary">Cancel</a>					              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
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
