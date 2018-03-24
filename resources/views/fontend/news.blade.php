@extends('fontend.layout') 
@section('url', "http://icchanoi.vn/lg/$lang/tin-tuc/$slug")
@section('title', "$title->c_title")
@section('avt', "$avt->c_avt")
@section('content') 


<hr>
<div class="news ">
          <div class="container">
              <div class="row">
                  <div class="col-md-9 text-justify" style="padding:20px">

                    <div class="row  ">
                    <?php foreach ($arr as $value)
                      {
                         
                    ?>
                      <h3>{!! $value->c_title !!}</h3>


             <hr>
<?php 
if($value->pk_news_id!=103 && $value->pk_news_id!=101 ){
?>
                            <img src="{{ $value->c_img }}" class="img-responsive" style="padding:15px;">
<?php } ?>

                            <p class="text-justify" style="padding:0px;">&nbsp;&nbsp;&nbsp;&nbsp;{!! $value->c_content !!}</p>               
</div>
<!---->
<br>
<hr>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_native_toolbox"></div>
<br><br>

<!--/////////comment facebook//////////-->
<!--
<div class="fb-comments" data-href="{{ url('lg') }}/{{ $value->fk_lang_id }}/tin-tuc/{{ $value->fk_category_id }}{{ $value->pk_news_id }}" data-width="555" data-numposts="5"></div>
  -->
<!--end comment facebook-->

        <div class="row">
                    <div class="col-md-8">
                    <?php 
                    $comment = DB::select("select * from tbl_comment where fk_news_id =".$value->pk_news_id." and c_status = 1");
                      foreach ($comment as $rows_cm)
                      {                                          
                    ?>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <span style="color:#38aee3;font-size:14px;"><i class="glyphicon glyphicon-user">&nbsp;{{ $rows_cm->c_name }}</i></span>&nbsp;&nbsp;&nbsp;<i  class="glyphicon glyphicon-time">&nbsp;{{ $rows_cm->c_date }}</i>
                            </div>
                            <div class="panel-body">
                              {{ $rows_cm->c_content }}
                            </div>
                        </div>
                        <?php } ?>
                    </div>
<!--
        <div class="row" style="clear:both">
                  <div class="col-md-11">
                 <form method="post" action="">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" placeholder="Tên" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="mail" class="form-control" name="mail" placeholder="Example@mail.com">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" name="content" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
          </form>
                </div>  
                </div>

-->

<!---->



          </div>
                    

          <!--================COMMENT=====================-->
                    
                
                    
                    <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                    </div>

                  


        <div class="col-md-3" style=" border-left:1px dashed black">
                 

                 <!--begin tin tức-->
                   <?php 
                            if($value->fk_category_id ==2)
                            {

                         ?>
                                 <div class="content-left-tnb">
                                <div class="menu-hotro">
                                    <h3><span class="glyphicon glyphicon-tasks"></span>DANH MỤC GIỚI THIỆU</h3>
                                </div>
                                <div class="menu-sidebar">
                                    <ul id="accordion" class="accordion">
                                    <li>
                                            <a href="{{ url('/lg/1/tin-tuc/thu-ngo') }}"><div class="link">Thư ngỏ</div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="link">Về ICC Hà Nội<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">

                                            <li><a href="{{ url('/lg/1/tin-tuc/thong-tin-ve-cong-ty') }}">Thông tin về Công ty</a></li>
                                            
                                                <li><a href="{{ url('/lg/1/tin-tuc/tam-nhin-va-su-menh') }}">Tầm nhìn - Sứ mệnh</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/van-hoa-icc-ha-noi') }}" >Văn hóa ICC HÀ NỘI</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="link">Ban lãnh đạo<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                
                                                <li><a href="{{ url('/lg/1/tin-tuc/ban-co-van') }}">Ban cố vấn</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/ban-lanh-dao') }}">Ban điều hành</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('/lg/1/tin-tuc/so-do-to-chuc') }}"><div class="link">Sơ đồ tổ chức</div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="link">Hệ thống VPĐD<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/lg/1/tin-tuc/van-phong-dai-dien-tai-nuoc-ngoai') }}">VP đại điện ngoài nước</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/he-thong-vpdd-tai-cac-dia-phuong') }}">Tại Việt Nam</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                        <a href="{{ url('/lg/1/tin-tuc/profile-icc-ha-noi') }}"><div class="link">Profile công ty</div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="link">Thư viện ảnh<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="#">Hoạt động ban lãnh đạo</a></li>
                                                <li><a href="#">Hoạt động đào tạo</a></li>
                                                <li><a href="#">Hoạt động học viên</a></li>
                                                <li><a href="#">Hoạt động xã hội</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <?php 
                                }
                                else if($value->fk_category_id ==12 || $value->fk_category_id ==14 || $value->fk_category_id == 15){

                            ?>


                                 <div class="content-left-tnb">
                                <div class="menu-hotro">
                                    <h3><span class="glyphicon glyphicon-tasks"></span>LĨNH VỰC HOẠT ĐỘNG</h3>
                                </div>
                                <div class="menu-sidebar">
                                    <ul id="accordion" class="accordion">
                                        <li>
                                            <a href="{{ url('/lg/1/tin-tuc/giay-phep-hoat-dong-dich-vu') }}"><div class="link">Giấy phép hoạt động</div>
                                            </a>
                                        </li>
                                        <li>
                                           <div class="link">Xuất khẩu lao động<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                            <li><a href="{{ url('/lg/1/tin-tuc/thong-tin-chung') }}">Giới thiệu chung</a></li>
                                                <li><a href="{{ url('/lg/1/category/thong-tin-thi-truong') }}">Thông tin thị trường</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/cong-tac-dao-tao') }}">Đào tạo lao động xuất khẩu</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/quy-trinh-tuyen-chon--hoan-thien-ho-so-thuc-tap-sinh-nhat-Ban-tu-khi-tuyen-den-nhap-canh') }}">Quy trình thủ tục</a></li>
                                                <li><a href="{{ url('/contact') }}" target="_blank">Đăng ký đi XKLĐ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="link">Du học Quốc tế<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Du học Nhật Bản</a></li>
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Du học Hàn Quốc</a></li>
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Du học Đức</a></li>
                                            </ul>
                                           
                                        </li>
                                       <li>
                                            <div class="link">Đào tạo ngoại ngữ<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Trung tâm Tiếng Nhật ICC Japan</a></li>
                                                <li><a href="http://icchanoi.vn/lg/1/tin-tuc/trung-tam-tieng-han-icc-korea">Trung tâm Tiếng Hàn ICC Korea</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <?php }
                                    else if($value->fk_category_id ==13){

                             ?>

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


                             <?php } else { ?>

                                <!--Xuất khẩu lao động-->

                                <div class="content-left-tnb">
                                <div class="menu-hotro">
                                    <h3><span class="glyphicon glyphicon-tasks"></span>LĨNH VỰC HOẠT ĐỘNG</h3>
                                </div>
                                <div class="menu-sidebar">
                                    <ul id="accordion" class="accordion">
                                       
                                        <li>
                                           <div class="link">Xuất khẩu lao động<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                            <li><a href="{{ url('/lg/1/tin-tuc/thong-tin-chung') }}">Giới thiệu chung</a></li>
                                                <li><a href="{{ url('/lg/1/category/thong-tin-thi-truong') }}">Thông tin thị trường</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/cong-tac-dao-tao') }}">Đào tạo lao động xuất khẩu</a></li>
                                                <li><a href="{{ url('/lg/1/tin-tuc/quy-trinh-tuyen-chon--hoan-thien-ho-so-thuc-tap-sinh-nhat-Ban-tu-khi-tuyen-den-nhap-canh') }}">Quy trình thủ tục</a></li>
                                                <li><a href="{{ url('/contact') }}" target="_blank">Đăng ký đi XKLĐ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="link">Du học Quốc tế<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Du học Nhật Bản</a></li>
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Du học Hàn Quốc</a></li>
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Du học Đức</a></li>
                                            </ul>
                                           
                                        </li>
                                       <li>
                                            <div class="link">Đào tạo ngoại ngữ<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="http://duhocicc.edu.vn/" target="_blank">Trung tâm Tiếng Nhật ICC Japan</a></li>
                                                 <li><a href="http://icchanoi.vn/lg/1/tin-tuc/trung-tam-tieng-han-icc-korea">Trung tâm Tiếng Hàn ICC Korea</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                              <!--end xuất khẩu lao động-->
                  
                   
                   <div class="row text-center" style="border-bottom:2px solid black;"><h3>Đơn hàng</h3></div>
                   <?php 
                   $dh = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =8 AND fk_lang_id = ".$value->fk_lang_id. "   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($dh as $rows_dh) {
                      
                   ?>
                    <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_dh->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="<?php echo  $rows_dh->slug ?>" >{{ $rows_dh->c_title }}</a></div>
                   </div>
                   
                   <?php } ?>
                   
                      <div class="row text-center" style="border-bottom:2px solid black;"><h3>Thực tập sinh</h3></div>
                        <?php 
                   $tts = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =10 AND fk_lang_id = ".$value->fk_lang_id. "   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($tts as $rows_tts) {
                      
                   ?>
                        <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_tts->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="{{ $rows_tts->slug }}">{{ $rows_tts->c_title }}</a></div>
                        </div>
                        
                        <?php } ?>
                       
                        <?php } ?>

                        <!--end news tin tuc-->
                    </div>
                </div>
                  <?php } ?>
            </div>
        </div>
             @endsection 