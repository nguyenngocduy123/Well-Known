@extends('fontend.layout') 
@section('url', 'http://icchanoi.vn/')
@section('content') 
<div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-7 col-md-offset-1">

                <div class="panel panel-primary">
                
                    <div class="panel-heading">
                        Thư viện video ICC Hà Nội
                    </div>
                    <div class="panel-body">
                         <?php 
                            foreach ($arr as $value) {
                               
                                ?>

                            <div class="row" style="padding-bottom: 20px;">
                                <div class="col-md-3">
                                    <a href="{{ url('/albumvideos') }}/{{ $value->c_slug }}">
                                    <img src="{{ $value->c_img }}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-md-9"><h4><a href="{{ url('/albumvideos') }}/{{ $value->c_slug }}">{{ $value->c_title }}</a></h4>

                                    <p>{!! $value->c_desc !!}</p>
                                </div>
                            </div>
                         
                            <?php } ?> 
                        </div>
                         {{ $arr->render() }}
                    </div>
                </div>
                <div class="col-md-4">
                
                         
                  
                   
                   <div class="row text-center" style="border-bottom:2px solid black;"><h3>Đơn hàng</h3></div>
                   <?php 
                   $dh = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =8 AND fk_lang_id = 1 ". "   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($dh as $rows_dh) {
                      
                   ?>
                    <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_dh->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="{{ url('lg/1/tin-tuc') }}/{{ $rows_dh->slug }}" >{{ $rows_dh->c_title }}</a></div>
                   </div>
                   
                   <?php } ?>
                   
                      <div class="row text-center" style="border-bottom:2px solid black;"><h3>Thực tập sinh</h3></div>
                        <?php 
                   $tts = DB::select("SELECT * FROM tbl_news  WHERE fk_category_id =10 AND fk_lang_id = 1". "   ORDER BY pk_news_id DESC  LIMIT 0, 5");
                      foreach ($tts as $rows_tts) {
                      
                   ?>
                        <div class="row" style="margin-top:15px; margin-bottom:15px;">
                            <div class="col-md-5"><img src="{{ $rows_tts->c_avt }}" style="width:100px; float:left" class="img-responsive"></div>
                            <div class="col-md-7" style="padding-left:10px; padding-right:5px;"><a href="{{ url('lg/1/tin-tuc') }}/{{ $rows_tts->slug }}">{{ $rows_tts->c_title }}</a></div>
                        </div>
                        
                        <?php } ?>

                      
                    </div>
                    
                </div> 
            
 
    </div>
        @endsection 



