@extends('fontend.layout') 
@section('url', 'http://icchanoi.vn/')
@section('content') 
<div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-7 col-md-offset-1">

                <div class="panel panel-primary">
                
                    <div class="panel-heading">
                        ICC Hà Nội
                    </div>
                    <div class="panel-body">
                         <?php 
                            foreach ($arr as $value) {
                               
                                ?>

                            <div class="row" style="padding-bottom: 20px;">
                                <div class="col-md-3">
                                    <a href="{{ url('/lg') }}/{{ $value->fk_lang_id }}/tin-tuc/{{ $value->slug }}"><img src="{{ $value->c_avt }}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-md-9"><h4><a href="{{ url('/lg') }}/{{ $value->fk_lang_id }}/tin-tuc/{{ $value->slug }}">{{ $value->c_title }}</a></h4>

                                    <p>{!! $value->c_desc !!}</p>
                                </div>
                            </div>
                         
                            <?php } ?> 
                        </div>
                         {{ $arr->render() }}
                    </div>
                </div>
                <div class="col-md-4">
                
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
                                else if($value->fk_category_id ==12 || $value->fk_category_id ==14 || $value->fk_category_id ==15){

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
                                                <li><a href="{{ url('/lg/1/tin-tuc/quy-trinh-tuyen-chon--hoan-thien-ho-so-thuc-tap-sinh-nhat-Ban-tu-khi-tuyen-den-nhap-canh') }}">Quỳ trình thủ tục</a></li>
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
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="{{ url('lg/1/tin-tuc') }}/{{ $rows_dh->slug }}" >{{ $rows_dh->c_title }}</a></div>
                   </div>
                   
                   <?php } ?>
                   
                      <div class="row text-center" style="border-bottom:2px solid black;"><h3>Thực tập sinh</h3></div>
                        <?php 
                   $tts = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =10 AND fk_lang_id = ".$value->fk_lang_id. "   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($tts as $rows_tts) {
                      
                   ?>
                        <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_tts->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="{{ url('lg/1/tin-tuc') }}/{{ $rows_tts->slug }}">{{ $rows_tts->c_title }}</a></div>
                        </div>
                        
                        <?php } ?>

                        <?php } ?>
                    </div>
                    
                </div> 
            
 
    </div>
        @endsection 



