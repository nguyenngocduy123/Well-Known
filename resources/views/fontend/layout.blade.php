<!DOCTYPE html>
<html>
<!-- 
*********************************
*********************************
*** ngotrungtin.nd@gmail.com  ***
*** Designed by Tín Ngô Trung ***
*** FB: /icc.tinngotrung      ***
*********************************
*********************************
-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICC Hà Nội - ICC ハノイ 送り出し機関, @yield('title')</title>

<link rel="shortcut icon" href="https://lh3.googleusercontent.com/7hRYtyyax37MHgLxAQXr06dIVfx84thD-cOdifSb7ap2KH60ZOZZ1PZf5ZarjaSR2f2-dtTk7v41gjReQwCybisqaKVCiVrQGSAwCSU_DLc_rDoOwp7t7qPbq3VdbpjgQziZHT5gX0ane3K5Let1ZXIZsrguno8G862O3OvunCXk3wRDAEd8RG0iQeVANvxZX2N48ca7OoeQ4zPi2CHyxdwp1cS5dybHzlVjdHdOQ0U024jHIym5eYa2Rs8AB0bVrN9Qy7SRgjicn-k6rThBfUhtRzhSTh24ZOc-u7G2TI2Ux9TX75hF73MbsSnhnx6f4O_zFQOOFET2nrR16oBaTn57ULIE0-5ak0XFsnDyWq5OdfBGCqc2bEy_q631dSIJVRj8-JUZNJxdvRHUG8DdovmT4q_8B9LM00RPBUawkpktLz_Xivul9eBgfL1MTXGceqrAGt2AgSu-pqbMVpPn9kbJzkYQO_a1x04gRFzHfkPZXJkQugdJiOa6r0YxOOEbqlw1gD_UUFNETTGOPsV9KeZvf14LJ8NdUM-GpZc_LeJHr60dCtrVFILEdFuOcvTUiMRB_OJir8HhotCANbjV_UqLf78y3Y0=s65-no" />
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/fontend') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <!--meta-->
     
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="@yield('url')" />
    <link rel="publisher" href="https://plus.google.com/102110467300403747439/"/>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')"  />
    <meta property="og:description" content="Du học quốc tế, Cung ứng nhân lực quốc tế, Đào tạo nghề Công nghệ cao, Tư vấn Đầu tư" />
    <meta name="description" content="thực tập sinh, du hoc nhat ban, tu nghiep sinh nhat ban, lao dong xuat khau, xuat khau lao dong, du học, tu nghiệp sinh, tuyen lao dong di nhat, lao dong nhat ban, lao dong di nhat ban, thuc tap sinh tai nhat, tu nghiep nhat ban, di lao dong o nhat, lam viec o nhat ban, viec lam tai nhat ban, viec lam them o nhat, vua hoc vua lam o nhat ban, lao động, thực tập sinh, thuc tap sinh, xuất khẩu, nhật bản, việc làm, tuyển dụng, tuyển sinh" />
    <meta property="fb:admins" content="100007383157525" />
    <meta property="fb:admins" content="100004780271686" />
    <meta property="fb:app_id" content="1732761790299588" />
    <meta property="og:image" content="@yield('avt')" />
    <!-- Custom CSS -->
           <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/marqee.css">
     <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/abc.css">
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/flickr.css">
   
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/magnific-popup.css">



    <!--css 404-->
   
      <!--end css 404-->
    <link rel="stylesheet" href="{{ asset('public/fontend') }}/css/responsive.css">
  <link href="{{ asset('public/fontend') }}/css/temp.css" rel="stylesheet">
  <link href="{{ asset('public/fontend') }}/css/temmic.css" rel="stylesheet">
  <script src="{{ asset('public/fontend') }}/js/jquery-1.12.1.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend') }}/css/v_menu.css" >
    <!-- jQuery -->
    <!--script type="text/javascript" src="{{ asset('public/fontend') }}/js/script.js" ></script-->
    <script src="{{ asset('public/fontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/fontend') }}/js/jquery.lightbox.js"></script>
    <script src="{{ asset('public/fontend') }}/js/templatemo_custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' type='text/javascript'></script>

 

    
    <!--=======================================================================-->
    
    <script type="text/javascript" src="{{ asset('public/fontend') }}/js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="{{ asset('public/fontend') }}/js/javascript.js"></script>
     <script src="{{ asset('public/fontend') }}/js/plugins.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    

    <style>
        
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('{{ asset('public/fontend') }}/img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

    
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('{{ asset('public/fontend') }}/img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    
<!--========================== Slide =========================================-->
    
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5743c1f4149d2af0"></script>
  
<script type="text/javascript">
    function showhide()
    {
      var div = document.getElementById("newpost");
    if (div.style.display !== "none")
    {
      div.style.display = "none";
    }
    else {
      div.style.display = "block";
    }
    }
    </script>
<!--end add this //////////////////////////////////////////////////////////////-->

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


<!--/////////////////////////////////////chat online/////////////////////////////////////-->

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?4AdD0oEekRpuCfuBOwdgOI4fXEhpQTuJ";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

<!--/////////////////////////////////////-->
  <header id="header" class="header">
    <div class="container-fluid">
                    <div class="row" style="background:#e84c3d; color:white; line-height:50px;">
                        <div class="col-md-8">
                          
        <a href="https://www.facebook.com/icchanoi" target="_blank" class="social_media social_media_facebook"><img src="http://icchanoi.vn/public/fontend/img/fb.png"></a><a href="https://twitter.com/icchanoi" target="_blank" class="social_media social_media_twitter"><img src="http://icchanoi.vn/public/fontend/img/tt.png"></a><a href="https://plus.google.com/102110467300403747439" target="_blank" class="social_media social_media_googleplus"><img src="http://icchanoi.vn/public/fontend/img/gplus.png"></a><a href="http://duhocnhatbanicc.blogspot.com/" target="_blank" class="social_media social_media_rss"><img src="http://icchanoi.vn/public/fontend/img/bls.png" width="32px"></a><a href="https://sites.google.com/site/iccduhoc/" target="_blank" class="social_media social_media_tumblr"><img src="http://icchanoi.vn/public/fontend/img/gsite.png" width="32px"></a>       
        <span class="gbtr_tools_info">
                  </span>
    
      

                        </div>
                        <div class="col-md-4 text-right">
              <a href="http://icchanoi.vn/" title="vietnamese" target="_blank"><img src="{{ asset('public/fontend') }}/lang/vn.jpg" ></a>   
              <a href="http://jp.icchanoi.vn/" title="Japanese" target="_blank"><img src="{{ asset('public/fontend') }}/lang/jp.png" ></a>
              <a href="http://en.icchanoi.vn/" title="English" target="_blank"><img src="{{ asset('public/fontend') }}/lang/uk.png" ></a>
            </div>
                    </div>
                    <div class="row">
                      <nav class="navbar navbar-default" >
                      <div class="container">
                        <div class="navbar-header" style="height:80px;">
                          <button type="button" style=" margin-top:20px;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('public/fontend') }}/images/logo2.png" height="80" style="margin-top:-15px;"></a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}" style="line-height:50px;">Trang chủ</a></li>
                            <li><a href="{{ url('lg/1/tin-tuc/thong-tin-ve-cong-ty') }}" style="line-height:50px;">Giới thiệu</a></li>
                            <li><a href="{{ url('/lg/1/tin-tuc/linh-vuc-hoat-dong') }}" style="line-height:50px;">Lĩnh vực hoạt động</a></li> 
                            <li><a href="{{ url('/lg/1/category/tin-tuc') }}" style="line-height:50px;">Tin tức</a></li> 
                             <li><a href="{{ url('/albumvideos') }}" style="line-height:50px;">Video</a></li>                            
                             <li><a href="{{ url('/lg/1/category/tuyen-dung') }}" style="line-height:50px;">Tuyển dụng</a></li>
                            <li><a href="{{ url('/contact') }}" style="line-height:50px;">Liên Hệ</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav> 
                  
                    </div>
          
          <!-- Brand and toggle get grouped for better mobile display -->
                    
                    
          <!-- /.navbar-collapse -->
      </div>
           <!--Slider full width-->
             <div class="container" style="padding: 0px; background: #3a5795">           
                      
              <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 418px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen --> 
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('{{ asset('public/fontend') }}/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 418px; overflow: hidden;" >
            <?php 
              $slide = DB::select("select * from tbl_slide  where c_show =1 order by c_position asc");
              foreach ($slide as $value_slide) {
               
              
            ?>
            <div data-b="0" data-p="225.00" style="display: none;">
                <img data-u="image" src="{{ $value_slide->c_img }}"  />
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 100px; left: 750px;  height: 418px;">
                
                </div>
            </div>
            <?php  } ?>
                
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>          
                        
           </div>             
           <!--Slider full width-->
    </div>
  </header><!-- /header -->

  <div id="content">
    @yield('content')
    </div><!--khac -->
<div class="line1"></div><div class="line"></div><div class="line1"></div>
    <!-- /content -->
<hr style="height:5px;">
  <footer id="footer " class="well">
    <div class="container">
          <div class="row  ">
              <div class="col-md-6">               
                    
                    <div class="col-xs-12">                                          
<h4 style="padding-bottom:5px">CÔNG TY CP ĐẦU TƯ QUỐC TẾ ICC HÀ NỘI</h4>

                                        </div>
<div class="col-xs-12">
                                            <p class="prow">Địa chỉ: Tầng 10, tòa B, Học viện tư pháp, số 9 Trần Vỹ, Mai Dịch, Hà Nội</p>
                                        </div>
<div class="col-xs-12">
                                            <p class="prow">Điện thoại: 024 6268 1133 - Fax 024 6287 3122</p>

                                        </div>
<div class="col-xs-12">
                                            <p class="prow">Email:info@icchanoi.vn</p>

                                        </div>
<div class="col-xs-12">
                      <a href="https://www.facebook.com/dialog/share?app_id=140586622674265&display=popup&href=http%3A%2F%2Ficchanoi.vn%2F%23.V1LIaPMDYXM.facebook&picture=&title=C%C3%B4ng+ty+CP+%C4%90%E1%BA%A7u+t%C6%B0+Qu%E1%BB%91c+t%E1%BA%BF+ICC+H%C3%A0+N%E1%BB%99i&description=Du+h%E1%BB%8Dc+qu%E1%BB%91c+t%E1%BA%BF%2C+Cung+%E1%BB%A9ng+nh%C3%A2n+l%E1%BB%B1c+qu%E1%BB%91c+t%E1%BA%BF%2C+%C4%90%C3%A0o+t%E1%BA%A1o+ngh%E1%BB%81+C%C3%B4ng+ngh%E1%BB%87+cao%2C+T%C6%B0+v%E1%BA%A5n+%C4%90%E1%BA%A7u+t%C6%B0&redirect_uri=http%3A%2F%2Fs7.addthis.com%2Fstatic%2Fthankyou.html" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/facebook.png" border="0" alt="Facebook"/></a>
          <a href="https://twitter.com/intent/tweet?text=C%C3%B4ng%20ty%20CP%20%C4%90%E1%BA%A7u%20t%C6%B0%20Qu%E1%BB%91c%20t%E1%BA%BF%20ICC%20H%C3%A0%20N%E1%BB%99i&url=http%3A%2F%2Ficchanoi.vn%2F%23.V1LIyFNCOoo.twitter&related=" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/twitter.png" border="0" alt="Twitter"/></a>
          <a href="https://plus.google.com/share?url=http%3A%2F%2Ficchanoi.vn%2F%23.V1LI38nkHD8.google_plusone_share&t=C%C3%B4ng+ty+CP+%C4%90%E1%BA%A7u+t%C6%B0+Qu%E1%BB%91c+t%E1%BA%BF+ICC+H%C3%A0+N%E1%BB%99i" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/></a>
          <a href="https://www.pinterest.com/join/?next=/pin/create/bookmarklet/%3Furl%3Dhttp%253A%252F%252Ficchanoi.vn%252F%26%26media%3Dhttp%253A%252F%252Ficchanoi.vn%252Fwp-content%252Fuploads%252F2014%252F11%252Fslide5.jpg%26h%3D516%26w%3D1600%26description%3DDu%2520h%25E1%25BB%258Dc%2520qu%25E1%25BB%2591c%2520t%25E1%25BA%25BF%252C%2520Cung%2520%25E1%25BB%25A9ng%2520nh%25C3%25A2n%2520l%25E1%25BB%25B1c%2520qu%25E1%25BB%2591c%2520t%25E1%25BA%25BF%252C%2520%25C4%2590%25C3%25A0o%2520t%25E1%25BA%25A1o%2520ngh%25E1%25BB%2581%2520C%25C3%25B4ng%2520ngh%25E1%25BB%2587%2520cao%252C%2520T%25C6%25B0%2520v%25E1%25BA%25A5n%2520%25C4%2590%25E1%25BA%25A7u%2520t%25C6%25B0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/pinterest_share.png" border="0" alt="Pinterest"/></a>
          <a href="https://www.addthis.com/bookmark.php?source=tbx32nj-1.0&v=300&url=http%3A%2F%2Fwww.addthis.com&pubid=ra-5743c1f4149d2af0&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/addthis.png" border="0" alt="Addthis"/></a>
</div>
                </div>
                <div class="col-md-6">
               
<div class="col-xs-12">                                          
<h4 style="padding-bottom:5px">TRƯỜNG ĐÀO TẠO QUỐC TẾ ICC HÀ NỘI</h4>

                                        </div>
<div class="col-xs-12">
                                            <p class="prow">Địa chỉ: Tầng 8-10, tòa B, Học viện tư pháp, số 9 Trần Vỹ, Mai Dịch, Hà Nội</p>
                                        </div>
<div class="col-xs-12">
                                            <p class="prow">Điện thoại: 024 6268 1133</p>

                                        </div>
<div class="col-xs-12">
                                            <p class="prow">Email: info@duhocicc.edu.vn</p>

                                        </div>
              <div class="col-xs-12">
                                            <p class="prow">Website: <a href="http://duhocicc.edu.vn/" target="_blank" title="Du học quốc tế ICC Hà Nội" />http://duhocicc.edu.vn/</a></p>

                                        </div>
          </div>

        
        

                </div>
            </div>
              
       
  </footer>
   
  

<!--end to-top-->
    <footer id="footer1">
    <div class="container text-center">
              © Copyright 2016 <a href="http://icchanoi.vn" title="ICC Hà Nội" style="color:#fff"> ICC Hà Nội </a>, All rights reserved
              <!-- ® ICC Hà Nội giữ bản quyền nội dung trên website này. -->
                        

        </div>
  </footer>
    

  <script src="{{ asset('public/fontend') }}/js/jquery.easing.min.js"></script>
  <script src="{{ asset('public/fontend') }}/js/jquery.dlmenu.js" type="text/javascript"></script>
        <script src="{{ asset('public/fontend') }}/js/owl.carousel.js" type="text/javascript"></script>
        <script src="{{ asset('public/fontend') }}/js/app.js" type="text/javascript"></script>
        <script src="{{ asset('public/fontend') }}/js/function.js" type="text/javascript"></script>
    
</body>
</html>