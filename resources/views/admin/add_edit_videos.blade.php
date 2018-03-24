@extends('admin.layout')
@section('content')
<script type="text/javascript" src="{{ url('public/admin/ckeditor') }}/ckeditor.js"></script>
<form class="well form-horizontal col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data"  id="contact_form">
<input type="hidden" name="_token" value="{{csrf_token() }}"></input>
<fieldset>

<!-- Form Name -->
<legend>Video</legend>
<?php
$ss = Session::get('ss');
  ?>
<!-- Text input-->
<span style="color:red">{{ $ss }}</span>
<div class="form-group">
  <label class="col-md-2 control-label">Tiêu đề</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="Tiêu đề" id="name" class="form-control"  type="text" name="c_title" value="<?php echo isset($arr->c_title)?$arr->c_title:""; ?>">
    </div>
  </div>
</div>

<!-- Text input-->

<!-- Select Basic -->
   
<div class="form-group">
  <label class="col-md-2 control-label">Code Embed</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="Embed" id="name" class="form-control"  type="text" name="c_embed" value="<?php echo isset($arr->c_embed)?$arr->c_embed:""; ?>">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label">Tóm tắt</label>  
    <div class="col-md-9 inputGroupContainer">
    <div style="width:100%">
        <textarea name="c_desc" cols="46"><?php echo isset($arr->c_desc)?$arr->c_desc:""; ?></textarea>
        <script language="javascript">
					CKEDITOR.replace( 'c_desc' );
					</script>

    </div>
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label">Nội dung</label>  
    <div class="col-md-9 inputGroupContainer">
    <div style="width:100%">
        <textarea name="c_content"  cols="46"><?php echo isset($arr->c_content)?$arr->c_content:""; ?></textarea>
        <script language="javascript">
					CKEDITOR.replace( 'c_content' );
					</script>

    </div>
	</div>
</div>
<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-2 control-label">Trạng thái</label>
                        <div class="col-md-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="c_show" checked="" value="0" /> Ẩn
                                </label>
                            
                                <label>
                                    <input type="radio" name="c_show" value="1" /> Hiện
                                </label>
                                
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-2 control-label">Link ảnh</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="Link Img" class="form-control"  type="text" name="c_img" value="<?php echo isset($arr->c_img)?$arr->c_img:""; ?>"  >
    </div>
    <img src="<?php echo isset($arr->c_img)?$arr->c_img:""; ?>" width=100px>
  </div>
</div>
<!-- language -->
<div class="form-group"> 
  <label class="col-md-2 control-label">Ngôn ngữ</label>
    <div class="col-md-3 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="fk_lang_id" class="form-control selectpicker" id="lang" onchange="lang1()"  >
      <?php
            $cat = DB::select("select * from tbl_lang");
            foreach($cat as $rows_cat)
            {
          ?>
            <option value="<?php echo $rows_cat->pk_lang_id ?>"> <?php echo $rows_cat->c_name;?></option>
          <?php } ?>
    </select>
  </div>
</div>
</div>


<div id="cc"></div>
<!-- Button -->
<script type="text/javascript">
    function lang1(){
            var lang = document.getElementById("lang").value;
            if(lang==3){
            document.getElementById("cc").innerHTML='<div class="form-group"><label class="col-md-2 control-label">Đường dẫn</label>  <div class="col-md-9 inputGroupContainer"> <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span><input  placeholder="Slug" id="slug" class="form-control"  type="text" name="c_slug" value="<?php echo isset($arr->slug)?$arr->slug:""; ?>"></div></div></div>'; 
            }   
            else {
              document.getElementById("cc").innerHTML="";
            }   
        }
</script>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Complete <span class="glyphicon glyphicon-send"></span></button>
    <a href="{{ url('admin\albumvideos') }} }}"><button  class="btn btn-warning" >Trở lại<span class="glyphicon glyphicon-arrow-left"></span></button></a>
  </div>
</div>

</fieldset>
</form>
@endsection