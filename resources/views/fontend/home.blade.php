@extends('fontend.layout') 
@section('url', 'http://icchanoi.vn/')
@section('content') 
<!--<link href="{{ asset('public/fontend/slide_text/preview/preview.css') }}" rel="stylesheet">-->
<!--<link href="{{ asset('public/fontend/slide_text/modern_ticker/css') }}/modern-ticker.css" type="text/css" rel="stylesheet">-->
<!--<link id="style-sheet" href="{{ asset('public/fontend/slide_text/modern_ticker/themes/theme1/theme.css') }}" type="text/css" rel="stylesheet">-->
<!--<script src="{{ asset('public/fontend/slide_text/modern_ticker/js') }}/jquery.modern-ticker.min.js" type="text/javascript"></script> -->

<!--<script src='http://webvn20.googlecode.com/files/jquery.simplyscroll.js' type='text/javascript'></script>-->
<!--<script src='https://raw.githubusercontent.com/logicbox/jquery-simplyscroll/master/jquery.simplyscroll.js' type='text/javascript'></script>-->
<script type='text/javascript'>

//<![CDATA[

(function($) {
    $(function() { //on DOM ready
        $("#scroller").simplyScroll({
            customClass: 'vert',
            orientation: 'vertical',
            auto: true,
            manualMode: 'loop',
            frameRate: 24,
            speed: 1
        });
    });
})(jQuery);

(function($) {
    $(function() { //on DOM ready
        $("#scroller1").simplyScroll({
            customClass: 'vert1',
            orientation: 'vertical1',
            auto: true,
            manualMode: 'loop',
            frameRate: 24,
            speed: 1
        });
    });
})(jQuery);
     
      //]]>

      (function($) {
    $(function() { //on DOM ready
        $("#scroller2").simplyScroll({
            customClass: 'vert2',
            orientation: 'vertical2',
            auto: true,
            manualMode: 'loop',
            frameRate: 24,
            speed: 1
        });
    });
})(jQuery);
     
      //]]>

</script>
<!-- js new -->
<script type="text/javascript">
$(function(){
$(".ticker1").modernTicker({effect:"scroll",scrollType:"continuous",scrollStart:"inside",scrollInterval:20,transitionTime:500,autoplay:true});
})</script>
<!-- end js new -->
<!-- END script test-->
<div class="khac">
  <div class="clear"></div><br><br>
  <div class="wrapper">
  <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                <!-- tin tuc su kien -->
                <div class="col-xs-11">
                    <h4 class="h4title10">
                    <!--<a href="{{ url('lg/1/category/tin-tuc') }}" title="Tin tức sự kiện"><span class="spantitle10" >Tin tức sự kiện</span></a>-->
                    <div id="layout1" class="active">
        
        <div class="ticker1 modern_ticker mt-round mt-scroll">
          <div class="mt-body">
            <div class="mt-news" style="left: 120px; top:-27px; width: 892px;">
              <ul style="width: 3475px; margin-left: -592px; list-style:none">
               <?php
                                $news = DB::select("select * from tbl_news where fk_lang_id = 1 and fk_category_id = 11 order by pk_news_id desc limit 5");
                                foreach ($news as $value) {
                                 
                     ?>             
              <li>
                 <!-- <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value->slug }}" target="_self" title="{{ $value->c_title }}">{{ $value->c_title }}</a>-->
              </li>
                   <?php } ?>
              </ul>
              
            </div>
            <div class="mt-controls" style=" top: -30px; right: -95px;">
              <div class="mt-prev"></div>
              <div class="mt-play mt-pause"></div>
              <div class="mt-next"></div>
            </div>
          </div>
        </div>
</div>
                  </h4>
                  
                  </div>


<!--gioi thieu-->
<div class="col-md-8">
    <h4 class="h4title3">
        <a href="{{ url('/lg/1/tin-tuc/thong-tin-ve-cong-ty') }}" title="ICC Hà Nội"><span class="spantitle3">ICC HÀ NỘI</span></a>     
    </h4>
    <div class="left">
        <div class="row">
            <div class="col-md-6" style="padding:24px;">
                <a href="{{ url('/lg/1/tin-tuc/thong-tin-ve-cong-ty') }}" class="text-justify atitle">
                    <img src="https://lh3.googleusercontent.com/uSoNejLnnVufzi0VGSRsAmBt0PsmK4xSdVGlx0ZmEsVXBipFix9xuMZLU8lFmTDgQWdh_1SE-n8mQlxKqmd7liAEjKR4PAwVjKkZv2suJ-2I1P1MnqZf0zO9lAit1nKT7Awt-sdJuqOla-1FTt18QpNU6Nkdv-jiOVsbfWybf0AFIbOeEqWKnZCRgUUe3EumXny2UqDquiIrNTYH19pBa01RTtixBr5M2DQRu0-L2bE_mO_e7tAHq7d30lJI42VtlHVI-_qP6qI0huTt6IBgBevM--Uv6JRLmc3nkcBrvDYKWdvFA7mZNxwypJ5msJYjBZVGdg9omjAimbbwNirATn3kZ1fGeCu3bFzA6wS_Twyi66QDYREhyGn6M7cJ2Hvj41hHKQYf-SNUyb5ND7McOzJ9axunJG3c-9yJzfCLcKPTR8-XZenRwsh_GC1Ex2JPHCXY3On0_GzWbZ2Ai_Q6e5-ZTXL5mPm5RKtYVmldnkudvVAulCU5pZksczYcMwW72-NSOF8T3azflXd5Ci3tAR7PHUTgxL9b2VvVvy9mG6pSiKDDNHi_6gmo-aBb1o_8V_53IENQTEerIfPF7Gxsih-loC91DG4=w1366-h649-no" class="img-responsive" width="100%" title="Thông tin chung">
                    <h3 class="h3title" title="Thông tin chung" style="    line-height: 0px;">Thông tin chung</h3>
				</a>
               
                <p class="thontinchung">Tên tiếng Anh: HANOI ICC INTERNATIONAL INVESTMENT JOINT STOCK COMPANY</p> 
				<p class="thongtinchung">Tên tiếng Nhật: ICC ハノイ 国際投資株式会社</p> 
				<p class="thongtinchung">Tên tiếng Trung:  河 內 ICC 國 際 投 資 股 份 公 司</p> 				
            </div>
            <div class="col-md-6" style="padding:24px;">
                                
                                  <!-- thong tin thi truong -->
     
               <div class="row">
                    <a href="{{ url('/lg/1/tin-tuc/thu-ngo') }}" class="arow" title="Thư ngỏ">
                        <div class="col-xs-4">
                            <img src="https://lh3.googleusercontent.com/1gRmyVayR2Pe2SWa-GX7gAUHUgDfDNWyBcAkrlM2n1Dv4myubDMRX1Lq-QzC129wZGNekQ1uHaySgpXdauUTksP00zI-G-WTjXajEO12nNfgOlZA8EpMZ9xQZ5VW62sby7C3ke46xse6tCc5Kh89cFC5Q-Fws0hDGqtHrRM5_yXZ-_damOFvFRQgNIKh2mNt7X8m_dLn6b6Au23N_SANG44rDOs6m3vuzN152Py8N7a9w3-yp1OdOvmjtVcHmO2_7bOPizUHmUtbGo2Y1IOmhhDqSROhWyjYmFUWjMO_jjrNYF5GeD5WLZkXqjK5LCMhcuSLBrj3PG7xXzejlb23N4iowakq9cOO10TjpTt14fAh2aWKI4YgmC6cyflh6vmtx8UL_J3e5OZkAshXW7WbQ6-d3A8bgoRGNEzi2jNKKNouy-rj_SLTSzMzXWvsxq-FvUq_czshPIkj9p_rmojPZNVovOr_D-NkAFz53fHjGShtemfBD8nXDSxALzEC2ewSotnHxUjG9pPo6yGkuTs_6-MhKSAHb_vF1CIZNQ-N9R7J5xQ_8unlzfEQt5YscWu0D9OZ8XS30_YVoP9pNjEVSXGxYMUEewc=w885-h623-no"  class="imgrow1">            
                        </div>
                        <div class="col-xs-8">
                            <p class="prow">Thư ngỏ</p>
                        </div>
                        <div class="col-xs-8" style="color:#777; font-size:8px; font-weight: normal;">
                            <span>ICC Hà Nội luôn xác định phải tạo ra các sản phẩm nhằm phục vụ tốt nhất...</span>
                        </div>
                    </a>    
                 </div>
          
                                <!--===================-->
				
                                  <!-- thong tin thi truong -->
    
                <div class="row">
                    <a href="{{ url('/lg/1/tin-tuc/linh-vuc-hoat-dong') }}" class="arow" title="Lĩnh vực hoạt động">
                        <div class="col-xs-4">
                            <img src="https://lh3.googleusercontent.com/EUOguWHgg_V8eb1W81HAFDIPFHJYgiOqGVhsF8I1IOUWEPieTXzxGgn2nHTZOjYh2s7YlsQ7LQuKdGHmxn_ELMHrkCHZrE81KFxUFbGdiIELv4uq-iAnBkIJjbG_CR4t-KT735MMkE442WRLOKNVxrcYKiO5ocMq9nM5j13dI15BpAV4nQAX44cp1DEA1edhImk9hqL2dR8a6tCKPaFd7m-RK8_JLq27auJ7V9kCmaEEsS5-5wZubbJugg1_3SMnWPoprDsqE4d-z4PCKoWpDeZDIik2TmIlsjZm7rjnxa6-wmF7oFrvH4cE9Uh7zsCn_bgRT6cwXJTT8ZrqJ9Ax2zGRt_Vns_iw45vH5uUXyiqSpx8SnCNxPhWePnh5hse3vltPNlaKWAyAYPNBGh03u8AXomkmMCfOrCoxx8vGDWPg2QWG_tDzJlz2LAe_ub9293zUfbgQSrm0sAXsm6xh7pVoKJypYyudDB5RCul74903dERici1T7Z4h8tSm6VvgXqfevrDvPYHzl17qH5pdy6KQGKvvGHXXlD6zer2-ADz7Q4YL-plnZk9at0au5a0kM1mqwwVQQmksLBGnsM_27DQezLRiwf0=w850-h442-no"  class="imgrow1">            
                        </div>
                        <div class="col-xs-8">
                            <p class="prow">Lĩnh vực hoạt động</p>
                        </div>
                        <div class="col-xs-8" style="color:#777; font-size:8px; font-weight: normal;">
                            <span>Du học Nhật Bản, Hàn Quốc: chuyên nghiệp, tận tâm.</span>
                        </div>
                    </a>    
                 </div>
         
                                <!--===================-->	
<!-- profile -->
    
                <div class="row">
                    <a href="{{ url('/lg/1/tin-tuc/profile-icc-ha-noi') }}" class="arow" title="profile-icc-ha-noi">
                        <div class="col-xs-4">
                            <img src="https://lh3.googleusercontent.com/yDRD7M1eg-ICBJavsBmqhjk8zZg5aUzrVDyNG6scL8L7_syCV35QjlmJxE5Goa8XSlxux7Nx6vQKrmzmSBlSnmI2rg9I5LtsENrccdsRkgq-_an2VcyumzV1G4CkN4JzU533XXP4PhvwpKjCNb1TQK-4yr3nfH8o-3HFSBdvbWZMuLoVSuEx_SNkGNaZXgC2mHA_DFW5x__0UvWigNb532M982V0NmlgJPc6WlRJdaLwXwIgBvxtES8qtBvDippdfoR73K-eE8E2r_IC7dcdRHlcL1sgLVMdlWAiQZsMvl8P59CfFSuFs4W6wjqBDAIWoea-ovFZjoC0gX3uDNLTKmrigy9ebC9UBQcnV8bVZ_boAbZsWST9-iOD7wNoHq_sjWl5zKafc5-SceyCo0fg92QSNHzpa8MONGvFvUNMh6A3_Q8ZJg4M0ZTJlqw3aPx5YgC6RkIj8dw8XcGPVA55jWq-B9RNCQovEdxTPBfEMwLm0e91Q9XS2TQIt3LlzHgsV2VcC6XHvklWYgCO7nVdslY6KPKSO0RDfWGNZQn5IuG9BdbrAKkFP6UldfZXZQt30EcOSsmMSTpA3GfxHeqiREn0nsx3mBpIGL2CIjv5faqnD974rWjf2xc9b4qOswkniXPgsyBtUkBkMRiiVIr4Pf9E0r_RpczXU4Qg9VzPVA=w383-h316-no"  class="imgrow1">            
                        </div>
                        <div class="col-xs-8">
                            <p class="prow">PROFILE ICC HÀ NỘI</p>
                        </div>
                        <div class="col-xs-8" style="color:#777; font-size:8px; font-weight: normal;">
                            <span>Công ty XKLĐ ICC Hà Nội - Trường Quốc tế ICC Hà Nội - CLB Bóng đá ICC Hà Nội.</span>
                        </div>
                    </a>    
                 </div>
         
                                <!--===================-->			
                               
                                    
             </div>
        </div>
              
    </div>
</div>
<div class="col-md-4">
 
 <h4 class="h4title1">
                   <span class="spantitle1">TIN TỨC</span>
                </h4>

                <!-- <div class="sidebar-asd nobottommargin col_last">
                    <div class="sidebar-widgets-wrap">
                      <div class="widget clearfix">
                        <div id="cc1">
                            <div id="flickr-widget" class="flickr-feed masonry-thumbs col-6" data-id="2947018@N20" data-count="18" data-type="group" data-lightbox="gallery"></div>
                        </div>               
                      </div>
                    </div>    
                  </div>-->
 <?php 
                          $tt = DB::select("select * from tbl_news where fk_lang_id=1 and fk_category_id =11 and c_show =1 order by pk_news_id desc limit 3");
                          foreach ($tt as $value_tt) {
                            
                        ?>
                        <div class="row">
                            <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_tt->slug }}" class="arow1" title="{{ $value_tt->c_title }}">
                                <div class="col-xs-4">
                                    <img src="{{ $value_tt->c_avt }}" class="imgrow2">
                                
                                </div>
                                <div class="col-xs-8">
                                    <p class="prow1">
<span id="newshot">
                                      <?php 
                                      $nh = $value_tt->c_hot;
                                          if( $nh == 1){
                                            ?>
                                            <img src="{{ asset('public/fontend/images/jam_new.gif') }}">
                                         <?php } ?>
                                      
                                    </span>
                                     <?php  echo str_limit($value_tt->c_title,90); ?>
</p>
                                </div>
                            </a>    
                          
                        </div>
                <?php } ?>
                 <!-- Tin tuc -->

</div>

<!--end gioi thieu-->
<!--fanpage-->


                  <!-- end tin tuc su kien -->
                    <div class="col-md-8">
                    <h4 class="h4title">
                    <a href="{{ url('/lg/1/category/xuat-khau-lao-dong') }}" title="Xuất khẩu lao động"><span class="spantitle">XUẤT KHẨU LAO ĐỘNG</span></a>
                    
                  </h4>
            <div class="left">
              <div class="row">
                <div class="col-md-6" style="padding:24px;">
                                  <a href="{{ url('/lg/1/tin-tuc/thong-tin-chung') }}" class="text-justify atitle">
                                    <img src="https://lh3.googleusercontent.com/dU9PMbk6WNGyvyfPy-OKiBOSN47t9w1Y1fcN5EsOT97ETPklSEetMhTk4QTKtwO2HwyAUpa2HsDavytewLa_NwZZK4_zgVgHMia0cFO5r1Qq7iY6DVBWbtpCWCTs1VI1lyqLwlBtN9Bp6W-BUMKO69Z4SYCM8WlIs8gLJh1TfzJ11D4MFw0CbLjax8m_8DFjtAtKH6BhIVb7k_m9V-UHw7fJk4JyyqasgNX8f9fFnrPVSzn5vxND8C9FL-gvx1xjNT73S_S9QhTCTGS6wkhUMGBt4gVz0_I4ZlKlpk1ewnbqbadVG2_zL9OQYm3j4BJ_na8ZfuNfFbaWzdFjqgG_jnFj7-7D2npNQgJaGcz8CrZ_FT0m6hENih_fgJSR4Vyj3rq5Bm5R669FwkYYPi0XRbNrtq52q2eS6yUkglXYVIpMCT00VrlbeONbXvoYBMemCxks55tyBS1WxPyNiLkJZZRVx_9dtBnl6lujeEDuHYQ51IsKGvxlcLTAAt-_0ktmHhxj1EbjHJRyXRIp7t757oTSIuOCIGAAbDHcUbIsSUjmEB9_N3ctcmeYZBS-Sdjila5OwwuTyZVS50bwC46exYNzcYkWio0=w1366-h545-no" class="img-responsive" width="100%" title="Thông tin chung">
                                    <h3 class="h3title" title="Thông tin chung">Thông tin chung</h3></a>
                                    <p>ICC Hà Nội là doanh nghiệp được Bộ Lao động - Thương binh và Xã hội cấp phép hoạt động đưa người lao động Việt Nam đi làm việc ở nước ngoài theo Hợp đồng.</p>
                                    <p>Thị trường trọng tâm gồm: Nhật Bản và Đài Loan.</p>
                                    
                                </div>
                <div class="col-md-6" style="padding:24px;">
                                  <h4 class="h4title3">
                                     <span class="spantitle3">Thông tin thị trường</span>
                                   
                                  </h4>
                                  <!-- thong tin thi truong -->
                                  <?php 
                                    $tttt = DB::select("select * from tbl_news where fk_lang_id=1 and fk_category_id=14");
                                    foreach ($tttt as $value_tttt) {
                                     
                                  ?>
                                <div class="row">
                                    <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_tttt->slug }}" class="arow" title="{{ $value_tttt->c_title }}">
                                        <div class="col-xs-4">
                                            <img src="{{ $value_tttt->c_img }}"  class="imgrow1">
                                        
                                        </div>
                                        <div class="col-xs-8">
                                            <p class="prow">{{ $value_tttt->c_title }}</p>

                                        </div>
                                        <div class="col-xs-8" style="color:#777; font-size:8px; font-weight: normal;t">
                                          <span>{!! $value_tttt->c_desc !!}</span>
                                        </div>
                                    </a>    
                                </div>
                                  <?php } ?>
                              <h4 class="h4title4">
                                     <span class="spantitle4">Quy trình thủ tục</span>
                                   
                                  </h4>
                                <!--===================-->
                                <?php 
                                    $qttt = DB::select("select * from tbl_news where fk_lang_id=1 and fk_category_id=15 and c_hot=2");
                                    foreach ($qttt as $value_qttt) {
                                     
                                  ?>
                                <div class="row">
                                    <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_qttt->slug }}" class="arow" title="{{ $value_qttt->c_title }}">
                                        <div class="col-xs-4">
                                            <img src="{{ $value_qttt->c_img }}"  class="imgrow1">
                                        
                                        </div>
                                        <div class="col-xs-8">
                                            <p class="prow">{{ $value_qttt->c_title }}</p>

                                        </div>
                                        
                                    </a>    
                                </div>
                                  <?php } ?>
                                  <br>  
                                <br>
                                    
                                </div>
              </div>
                           <!--======================================du học============================--> 
                            <h4 class="h4title1">
                    <a href="http://duhocicc.edu.vn" title="TRƯỜNG QUỐC TẾ ICC HÀ NỘI"><span class="spantitle1" >TRƯỜNG QUỐC TẾ ICC HÀ NỘI</span></a>
                    
                  </h4>
              <div class="row">
                <div class="col-md-6" style="padding-top:22px;">
                
                                  <a href="{{ url('/lg/1/tin-tuc/cam-nang-du-hoc-quoc-te---truong-quoc-te-icc-ha-noi') }}" class="text-justify atitle1" title="Cẩm nang Du học Quốc tế">
                                    <img src="https://lh3.googleusercontent.com/C2E0xmvk918V4EIoGpVEitsc-q6NH1vlws5K_BxAaqjuTcVbfwbg3-_f5J9jh5COOzffeG2IWIcdVk3K7YMrd-2i_obd7_br9-4TaXpb8Mn04tvQ8bo5a722gsRGkUQEbv1MStil4ua-ekmslD4tmS8Y_7ydldS090fTD_NTAsXH4n9OSeNxL4BJgBCO-8uSypnZXmG_A0ViZNl49wb67EI67Oz-nCBadmZkLRirdNZTUw8zlxqYJb72-CekZ5uHPuU3Qc_1bqHlbCyDkcwPykyvagxadAag6NASVFAnSBOuwhmqvn9BXLUlnsxwxtUdMzEQ-o_lIEfKw2ysVRx6UmYObCzIKj_Og4j7RAeQ_OobzMLcfQLETGJcv9xrlHhDGYXuv2ccguICkibNg9m7StzNai7sQ7hFm4CbeOH9r4Nu_RFlURjTitCsDYO0Jx66eRnXcW0fkPCT6wppuhV8UBBXw_6iZ1rbj_pLIqoCnSDnH9BJIzrtSUcrY9C3-fRVtmIYnHLlaX6g7nq07UpG8wqxsv2lxyFP7MtETelozdqRocC_VONLYItcDmikyLZgecPF8g33zIxWnUagbYqnbfrC5W6WRioMDLqtgBjwUN5sI543YuS2SMSAF812AkGkTBkyOIwLhAAKSJbNTACeBzc5C70v_X2-fZ0=w700-h613-no" class="img-responsive" width="100%">
                                    <h3 class="h3title1">Cẩm nang Du học Quốc tế</h3></a>
                                    <p>Du học có nghĩa là bạn phải tự làm mọi việc từ bé đến lớn, tự nấu ăn, tự giặt giũ, tự chăm sóc, tự lau dọn…</p>
                   
                  <?php 
                     $dhnb=DB::select("SELECT * FROM tbl_news WHERE fk_category_id = 18 and fk_lang_id =1 and c_hot=1 and c_show =1 ORDER BY pk_news_id DESC LIMIT 2");
                    foreach ($dhnb as $value_dhnb) {
                  ?>               
                      <div class="row" style="padding-top: 20px;">
                        <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_dhnb->slug }}" class="arow1" title="{{ $value_dhnb->c_title }}">
                          <div class="col-xs-4">
                            <img src="{{ $value_dhnb->c_avt }}" class="imgrow1">
                          
                          </div>
                          <div class="col-xs-8">
                            <p class="prow1"><img src="{{ asset('public/fontend/images/jam_new.gif') }}"> {{ $value_dhnb->c_title }}</p>
                          </div>
                        </a>    
                      </div>
                      
                     <?php } ?>
                </div>
                <!--999999999999999999999999999999999999999999999999999999999999999999999999-->
                <div class="col-md-6" style="padding-top:22px;">
                                  <?php 
                    $dhnb_cn=DB::select("SELECT * FROM tbl_news WHERE fk_category_id = 16 and fk_lang_id =1 and c_hot=1 ORDER BY pk_news_id DESC LIMIT 1");
                    foreach ($dhnb_cn as $value_dhnb_cn) {
                     
                ?>
                                  <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_dhnb_cn->slug }}" class="text-justify atitle1" title="{{ $value_dhnb_cn->c_title }}">
                                    <img src="{{ $value_dhnb_cn->c_img }}" class="img-responsive" width="100%">
                                    <h3 class="h3title1">{{ $value_dhnb_cn->c_title }}</h3></a>
                                    <p>{!! $value_dhnb_cn->c_desc !!}</p>
                  <?php } ?> 
                  <?php 
                     $cndd=DB::select("SELECT * FROM tbl_news WHERE fk_category_id =16 and fk_lang_id =1 and c_hot=2 ORDER BY pk_news_id DESC LIMIT 2");
                    foreach ($cndd as $value_cndd) {
                  ?>               
                      <div class="row" style="padding-top: 20px;">
                        <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_cndd->slug }}" class="arow1" title="{{ $value_cndd->c_title }}">
                          <div class="col-xs-4">
                            <img src="{{ $value_cndd->c_img }}" class="imgrow1">
                          
                          </div>
                          <div class="col-xs-8">
                            <p class="prow1">{{ $value_cndd->c_title }}</p>
                          </div>
                        </a>    
                      </div>
                      
                     <?php } ?>
                  
                  
                  
                  
                                </div>
                <!------------------------- Banner ---------------------------->
<div class="col-md-12" >
             <?php 
                     $banner = DB::table("tbl_banner")->where("c_position","=",2)->orderby("pk_banner_id","desc")->limit(1)->get();
                    foreach($banner as $value_banner){
                    
             ?>
             <!--  <img src="{{ $value_banner->c_img }}" class="img-responsive"> -->
                   
             <?php } ?>  
     <h4 class="h4title1">
                    <a href="http://duhocicc.edu.vn" title="Du học Nhật Bản"><span class="spantitle1" >ĐÀO TẠO NGOẠI NGỮ</span></a>
                    
                  </h4>   
                </div>
               <?php 
                    $dtqt=DB::select("SELECT * FROM tbl_news WHERE fk_category_id = 19 and fk_lang_id =1 ORDER BY pk_news_id DESC LIMIT 2");
                    foreach ($dtqt as $value_dtqt) {
                     
                ?>
<div class="col-md-6" style="padding-top:22px;">
                   
                                  <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_dtqt->slug }}" class="text-justify atitle1" title="{{ $value_dtqt->c_title }}">
                                    <img src="{{ $value_dtqt->c_avt }}" class="img-responsive" width="100%" height="100%">
                                    <h3 class="h3title1">{{ $value_dtqt->c_title }}</h3></a>
                                    <p>{!! $value_dtqt->c_desc !!}</p>
                
				  </div>

  <?php } ?> 

 <!------------------------- Banner ---------------------------->
              </div>
              
              
            </div>

          </div>
          <div class="col-md-4">
                
                     <h4 class="h4title2">
                   <a href="{{ url('/lg/1/category/don-hang') }}" title="đơn hàng" > <span class="spantitle2">ĐƠN HÀNG</span></a>
                    </h4>
                        <?php 
                          $dh = DB::select("select * from tbl_news where fk_lang_id=1 and fk_category_id =8 order by pk_news_id desc limit 5");
                          foreach ($dh as $value_dh) {
                            
                        ?>
                        <div class="row">
                            <a href="{{ url('/lg/1/tin-tuc') }}/{{ $value_dh->slug }}" class="arow2" title="{{ $value_dh->c_title }}">
                                <div class="col-xs-4">
                                    <img src="{{ $value_dh->c_avt }}" class="imgrow2">
                                
                                </div>
                                <div class="col-xs-8">
                                    <p class="prow2"><span id="newshot">
                                      <?php 
                                      $nh = $value_dh->c_hot;
                                          if( $nh == 2){
                                            ?>
                                            <img src="{{ asset('public/fontend/images/jam_new.gif') }}">
                                         <?php } ?>
                                      
                                    </span>{{ $value_dh->c_title }}</p>
                                </div>
                            </a>    
                          
                        </div>
                <?php } ?>
                <!-- tin tức cũ-->
    <h4 class="h4title2">
                               <a href="https://www.facebook.com/icchanoi/" title="Kết nối ICC Hà Nội" target="_blank"><span class="spantitle2" >KẾT NỐI ICC HÀ NỘI</span></a>

                            </h4>
                            <div class="fb-page" data-href="https://www.facebook.com/icchanoi/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/icchanoi/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/icchanoi/">ICC Hà Nội</a></blockquote></div>

     <h4 class="h4title3">
                               <a href="https://www.facebook.com/duhocicc.edu.vn/" title="Du học Nhật Bản - Hàn Quốc" target="_blank"><span class="spantitle3" >TRƯỜNG QUỐC TẾ ICC HÀ NỘI</span></a>

                            </h4>
                            <div class="fb-page" data-href="https://www.facebook.com/duhocicc.edu.vn" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/duhocicc.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/duhocicc.edu.vn">Du học ICC Hà Nội</a></blockquote></div>
                 <!-- Tin tuc -->
                      
                          
                <!-- <div id="flickr-widget" class="flickr-feed masonry-thumbs col-5" data-id="3028610@N21" data-count="15" data-type="group" data-lightbox="gallery"></div> -->

                  <br>
                    <!-- end thư viện ảnh -->
                    <!-- page du học -->
                    <style type="text/css">
                        
@-webkit-keyframes my {
   0% { color: #e84c3d; } 
   50% { color: #fff;  } 
   100% { color: #e84c3d;  } 
 }
 @-moz-keyframes my { 
   0% { color: #e84c3d;  } 
   50% { color: #fff;  }
   100% { color: #e84c3d;  } 
 }
 @-o-keyframes my { 
   0% { color: #e84c3d; } 
   50% { color: #fff; } 
   100% { color: #e84c3d;  } 
 }
 @keyframes my { 
   0% { color: #e84c3d;  } 
   50% { color: #fff;  }
   100% { color: #e84c3d;  } 
 } 
 .testttt {
        
   -webkit-animation: my 700ms infinite;
   -moz-animation: my 700ms infinite; 
   -o-animation: my 700ms infinite; 
   animation: my 700ms infinite;
}

                    </style>
                             <h4 class="h4title6">
                               <a href="http://duhocicc.edu.vn/" title="Du học quốc tế"><span class="spantitle6 testttt">CHUYÊN TRANG DU HỌC ICC</span></a>

                            </h4>
                            <div class="row">
                              <a href="http://duhocicc.edu.vn/" title="Du học quốc tế"><img src="https://lh3.googleusercontent.com/mskFhJOjU_WYTn9aLX8p1kivAws3xbdDrpMC7M_XccKLp2FuZMtLVgQiaRkyPYVWRGIW0LPJX9j7woi9oZwmP-xDBT1q629KPmBy0-QHa3uwO0_cozNkrqWtw2L9_hyWEvy6D_n0RGsIn-VyZJFGJNB-kT2-L6Xd7WQ3ogx5MXyIV7ZGgebcbL6j1lNqatpSHA5iH_YOYdFEpzIIqaYinILbgTmZKuVKHm0xHQYcPkxpK_JUjjH_3XKMvZdgZ14vEUx-7GHHBJdUUBfFTUpzNc7El447MUHlQEUnnU5piTKDiAcaF4Xj4MfrhcFoonj5Kedt46ebvnAhxwb3-Qz17V85jzHnqvVOLsWyjVkp-8zDQE5KtzLImmAkJxryGNOmopj38x0WrFJXPvubaeDLo-MMMpWTxfiCKbZesOn7T-0mgDWEGBDwU5IH5e2TAH_eJUedsemqojkO9HBfFqQLrSLDek_8ahj-jGsl8Ai17fIKgExglriir9olhw0y2rgLDonQ7eEKbUpudGMqpBbynvUt5UspyjlHS-ip94pycAiHEsLAqHHP64BNP8DVbYv2JOgUyjk6nycYxL1ky-eY-CDbPbqJBaw=w1366-h498-no" class="img-responsive"></a>
                            </div>
                            <h4 class="h4title4">
                              <a href="{{ url('albumvideos') }}" title ='Thư viện video'/> <span class="spantitle4">THƯ VIỆN VIDEO</span></a>

                            </h4>
<?php 
 $video = DB::select("select * from tbl_videos where c_show=1 and c_hot=1 order by pk_videos_id desc limit 1");
                          foreach ($video as $value_video ) {
?>
                                  <iframe width="350" height="211" src="https://www.youtube.com/embed/{{ $value_video->c_embed }}" frameborder="0" allowfullscreen></iframe>
<?php } ?>

                          <!-- end page du học -->
          </div>
        </div>
      </div> 
    </div>
</div>
</div><!--
<div class="wrapper">
  <div class="container">
        <div class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="col-md-4">
                  <h4 class="h4title2">
                               <a href="https://www.facebook.com/icchanoi/" title="Kết nối ICC Hà Nội" target="_blank"><span class="spantitle2" >KẾT NỐI ICC HÀ NỘI</span></a>

                            </h4>
                            <div class="fb-page" data-href="https://www.facebook.com/icchanoi/" data-width="350" data-height="220" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/icchanoi/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/icchanoi/">ICC Hà Nội</a></blockquote></div>
                  </div>
                  <div class="col-md-4">
                  <h4 class="h4title3">
                               <a href="https://www.facebook.com/duhocnhaticc/" title="Du học Nhật Bản" target="_blank"><span class="spantitle3" >Du học Nhật Bản</span></a>

                            </h4>
                            <div class="fb-page" data-href="https://www.facebook.com/duhocicc/" data-width="350" data-height="220" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/duhocicc/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/duhocicc/">Du học Nhật Bản - ICC Hà Nội</a></blockquote></div>
                  </div>
                  <div class="col-md-4">
                  <h4 class="h4title6">
                               <a href="https://www.facebook.com/duhochanicc/" title="Du học Hàn Quốc" target="_blank"><span class="spantitle6" >Du học Hàn Quốc</span></a>

                            </h4>
                            <div class="fb-page" data-href="https://www.facebook.com/duhochanicc" data-width="350" data-height="220" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/duhochanicc" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/duhochanicc">Du học Hàn Quốc - ICC Hà Nội</a></blockquote></div>
                  </div>
              </div>
            </div>
        </div> 
  </div>
</div>          --> 
@endsection