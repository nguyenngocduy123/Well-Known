@extends('admin.layout')
@section('content')
<script type="text/javascript" src="{{ url('public/admin/ckeditor') }}/ckeditor.js"></script>
<form class="well form-horizontal col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data"  id="contact_form">
<input type="hidden" name="_token" value="{{csrf_token() }}"></input>
<fieldset>

<!-- Form Name -->
<legend>facehome</legend>


  
<div class="form-group">
  <label class="col-md-2 control-label">Code Nhúng</label>  
    <div class="col-md-9 inputGroupContainer">
    <div style="width:100%">
        <textarea name="c_embed" cols="46"><?php echo isset($facehome->c_embed)?$facehome->c_embed:""; ?></textarea>
        <script language="javascript">
          CKEDITOR.replace( 'c_embed' );
          </script>

    </div>
  </div>
</div>
 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="Name" class="form-control"  type="text" name="c_name" value="<?php echo isset($facehome->c_name)?$facehome->c_name:""; ?>">
    </div>
  </div>
</div>


   
<div class="form-group"> 
  <label class="col-md-2 control-label">Trạng thái</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="status" class="form-control selectpicker" >
          <option value="0" > Ẩn</option>
          <option value="1" > Hiện</option> 
    </select>
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label">Vị trí</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="vị trí" class="form-control"  type="text" name="c_position" value="<?php echo isset($facehome->c_position)?$facehome->c_position:""; ?>">
    </div>
  </div>
</div>

<!-- Text input-->

<!-- Select Basic -->



<!-- language -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Complete <span class="glyphicon glyphicon-send"></span></button>
    <a href="{{ url('admin\facehome') }} }}"><button  class="btn btn-warning" >Trở lại<span class="glyphicon glyphicon-facehomeow-left"></span></button></a>
  </div>
</div>

</fieldset>
</form>
@endsection