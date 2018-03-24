@extends('admin.layout')
@section('content')
<form class="well form-horizontal col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data"  id="contact_form">
<input type="hidden" name="_token" value="{{csrf_token() }}"></input>
<fieldset>

<!-- Form Name -->
<legend>banner</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label">Vị trí</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="vị trí" class="form-control"  type="text" name="c_position" value="<?php echo isset($banner->c_position)?$banner->c_position:""; ?>">
    </div>
  </div>
</div>

<!-- Text input-->

<!-- Select Basic -->
   
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
  <label class="col-md-2 control-label">Link ảnh</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  placeholder="Link Img" class="form-control"  type="text" name="c_img" value="<?php echo isset($banner->c_img)?$banner->c_img:""; ?>"  >
    </div>
    <img src="<?php echo isset($banner->c_img)?$banner->c_img:""; ?>" width=500px>
  </div>
</div>
<!-- language -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Complete <span class="glyphicon glyphicon-send"></span></button>
    <a href="{{ url('admin\banner') }} }}"><button  class="btn btn-warning" >Trở lại<span class="glyphicon glyphicon-arrow-left"></span></button></a>
  </div>
</div>

</fieldset>
</form>
@endsection