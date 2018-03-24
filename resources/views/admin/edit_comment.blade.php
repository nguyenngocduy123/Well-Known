@extends('admin.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
<form class="well form-horizontal" action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data"  id="contact_form">
<input type="hidden" name="_token" value="{{csrf_token() }}"></input>
<fieldset>

<!-- Form Name -->
<legend>Category</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label">Content</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
  <input  name="c_content" class="form-control"  type="text" value="<?php echo isset($arr->c_content)?$arr->c_content:""; ?>">
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Complete<span class="glyphicon glyphicon-send"></span></button>
     <a href="{{ url('admin\comment') }} }}"><button  class="btn btn-warning" >Trở lại<span class="glyphicon glyphicon-arrow-left"></span></button></a>
  </div>
</div>

</fieldset>
</form>
</div>
@endsection