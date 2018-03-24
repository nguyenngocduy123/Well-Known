@extends('fontend.layout') 
@section('url', "http://icchanoi.vn/albumvideos/$slug")
@section('title', "$title->c_title")
@section('avt', "$avt->c_img")
@section('content') 

<hr>
<div class="news">
          <div class="container">
              <div class="row">
                  <div class="col-md-9 text-justify" style="padding:20px">

                    <div class="row">
                    <?php foreach ($arr as $value)
                      {
                         
                    ?>
                      <h3>{!! $value->c_title !!}</h3>


             <hr>
 <iframe width="780" height="500" src="https://www.youtube.com/embed/{{ $value->c_embed }}" frameborder="0" allowfullscreen></iframe>


                            <p class="text-justify" style="padding:0px;">&nbsp;&nbsp;&nbsp;&nbsp;{!! $value->c_content !!}</p>               
</div>
<!---->
<br>
<hr>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_native_toolbox"></div>
<br><br>

<?php } ?>
        
                 
                </div>
                  


        <div class="col-md-3" style=" border-left:1px dashed black">
                 

                
                              <!--Xuất khẩu lao động-->

                                <div class="content-left-tnb">
                                <div class="menu-hotro">
                                    <h3><span class="glyphicon glyphicon-tasks"></span>Xuất khẩu lao động</h3>
                                </div>
                                <div class="menu-sidebar">
                                    <ul id="accordion" class="accordion">
                                        <li>
                                            <a href="{{ url('/lg/1/tin-tuc/thong-tin-chung') }}"><div class="link">Giới thiệu chung</div>
                                            </a>
                                        </li>
                                          <li>
                                            <a href="{{ url('/lg/1/category/thong-tin-thi-truong') }}"><div class="link">Thông tin thị trường</div>
                                            </a>
                                        </li>
                                          <li>
                                            <a href="{{ url('/lg/1/tin-tuc/cong-tac-dao-tao') }}"><div class="link">Đào tạo lao động xuất khẩu</div>
                                            </a>
                                        </li>
                                          <li>
                                            <a href="{{ url('/lg/1/tin-tuc/quy-trinh-tuyen-chon--hoan-thien-ho-so-thuc-tap-sinh-nhat-Ban-tu-khi-tuyen-den-nhap-canh') }}"><div class="link">Quy trình thủ tục</div>
                                            </a>
                                        </li>
                                          <li>
                                            <a href="{{ url('/contact') }}" target="_blank"><div class="link">Đăng ký đi XKLĐ</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                              <!--end xuất khẩu lao động-->


                            
                  
                   
                   <div class="row text-center" style="border-bottom:2px solid black;"><h3>Đơn hàng</h3></div>
                   <?php 
                   $dh = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =8 AND fk_lang_id = 1   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($dh as $rows_dh) {
                      
                   ?>
                    <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_dh->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="<?php echo  $rows_dh->slug ?>" >{{ $rows_dh->c_title }}</a></div>
                   </div>
                   
                   <?php } ?>
                   
                      <div class="row text-center" style="border-bottom:2px solid black;"><h3>Thực tập sinh</h3></div>
                        <?php 
                   $tts = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =10 AND fk_lang_id = 1   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($tts as $rows_tts) {
                      
                   ?>
                        <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_tts->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="{{ $rows_tts->slug }}">{{ $rows_tts->c_title }}</a></div>
                        </div>
                        
                        <?php } ?>
                       
                       

                        <!--end news tin tuc-->
                    </div>
                
                  
         
        </div>
    </div>
</div>
             @endsection 