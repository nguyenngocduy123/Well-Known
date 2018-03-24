<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Layout</title>
	
	<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/css/bootstrap.min.css') }}">
	 <script src="{{ asset('public/admin/js/ie-emulation-modes-warning.js') }}"></script>
	  <link href="{{ asset('public/admin/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/dashboard.css') }}" rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('public/admin') }}/css/style.css" rel="stylesheet" type="text/css"/>
  
    <!-- <link href="{{ asset('public/admin/css/menu.css') }}" rel="stylesheet">
    <script src="{{ asset('public/admin/js/menu.js') }}"></script> -->
</head>
<body>
<!--////////////////////////////////SDK facebôk////////////////////////////////////-->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1732761790299588',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/vi_VN/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1732761790299588";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<!--///////////////////////////end SDK///////////////////////////////////////////-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('admin\index') }}">Welcome Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('admin\index') }}">Home</a></li>
            <li class=""><a href="{{ url('admin\category') }}">Category</a></li>
            <li class=""><a href="{{ url('admin\news') }}">News</a></li>
            <li class=""><a href="{{ url('admin\slide') }}">Slide</a></li>
             <li class=""><a href="{{ url('admin\banner') }}">Banner</a></li>
            <li class=""><a href="{{ url('admin\facehome') }}">Facehome</a></li>
           <li class=""><a href="{{ url('admin\albumvideos') }}">Videos</a></li>
            <li class=""><a href="{{ url('admin\contact') }}">Contact</a></li>
<li>
<?php
$total = DB::table("tbl_contact")->where('c_status','<=',0)->count();;

?>

<span style="color:red; font-size:12px;">{{ $total }} &nbsp;

<img src="/public_html/public/upload/images/jam_new.gif" />
</span>
</li>
            <li class=""><a href="{{ url('admin\user') }}">User</a></li>
            <li class=""><a href="{{ url('logout') }}">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--/////////////////////////////////-->
    
                <div class="col-sm-4 col-md-2 sidebar" >
                <ul class="nav nav-sidebar">
 <div class="content-left-tnb">
                                <div class="menu-hotro">
                                    <h3><span class="glyphicon glyphicon-tasks"></span>DANH MỤC</h3>
                                </div>
                                <div class="menu-sidebar">
                                    <ul id="accordion" class="accordion">
                                        <?php    
                  $lang = DB::select("select * from tbl_lang");
                  foreach($lang as $rows_lang)
                  {
                ?>
                                        <li>
                                            <div class="link"><i class="fa fa-code"></i><?php echo $rows_lang->c_name;?> <i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                            <?php
                  $cat = DB::select("select * from tbl_category_news");
                  foreach($cat as $rows_cat)
                  {
                ?>
                          <li><a href="{{ url('admin\lang') }}\{{ $rows_lang->pk_lang_id }}\news\cate\{{ $rows_cat->pk_category_id }}"><?php echo $rows_cat->c_name;?></a></li>
                                                
<?php } ?>
                                            </ul>
                                        </li>
                                        
              <?php } ?>
                                    
                                    </ul>
                                </div>
                            </div></ul>
</div></div>
                <!--||||||||||||||||||||||||||||||||||||||||||||-->


    <!--/////////////////////////////////-->
    <div class="container-fluid" style="margin-top: 100px;"> 	
      @yield('content')
    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('public/admin/js/jquery.min.js') }}"><\/script>')</script>
    <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('public/admin/js/holder.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
           <script src="{{ asset('public/admin') }}/js/jquery.dlmenu.js" type="text/javascript"></script>
        <script src="{{ asset('public/admin') }}/js/owl.carousel.js" type="text/javascript"></script>
        <script src="{{ asset('public/admin') }}/js/app.js" type="text/javascript"></script>
</body>
</html>