@extends('admin.layout')
@section('content')
<script type="text/javascript" src="{{ url('public/admin/ckeditor') }}/ckeditor.js"></script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
<form class="well form-horizontal" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data"  id="contact_form">
<input type="hidden" name="_token" value="{{csrf_token() }}"></input>
<fieldset>

<!-- Form Name -->
<legend>Category</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label">Danh mục</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  name="name" placeholder="Tiêu đề" class="form-control"  type="text" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>">
    </div>
  </div>
</div>
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
<div class="form-group"> 
  <label class="col-md-2 control-label">Ngôn ngữ</label>
    <div class="col-md-3 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="lang" class="form-control selectpicker" >
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
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Complete<span class="glyphicon glyphicon-send"></span></button>
     <a href="{{ url('admin\category') }} }}"><button  class="btn btn-warning" >Trở lại<span class="glyphicon glyphicon-arrow-left"></span></button></a>
  </div>
</div>

</fieldset>
</form>
</div>
@endsection