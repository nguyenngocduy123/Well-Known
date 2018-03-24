@extends('admin.layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <form class="well form-horizontal" action="<?php echo $form_url; ?>" method="post"  id="contact_form">
    <input type="hidden" name="_token" value="{{csrf_token() }}"></input>
<fieldset>
    <legend>User</legend>
    
    <!-- Text input-->
        
        <div class="form-group">
          <label class="col-md-4 control-label">Họ tên</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="name" placeholder="Nguyễn Văn A" class="form-control"  type="text" value="<?php echo isset($arr->name)?$arr->name:""; ?>" required	>
            </div>
          </div>
        </div>
       <div class="form-group">
      	<label class="col-md-4 control-label">E-Mail</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input name="email" placeholder="User@mail.com" class="form-control"  type="text" value="<?php echo isset($arr->email)?$arr->email:""; ?>" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      	<label class="col-md-4 control-label">Password</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input name="password" placeholder="password" class="form-control"  type="password" required>
        </div>
      </div>
    </div>
    <!-- Button -->
    <div class="form-group" >
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4" >
        <button type="submit" class="btn btn-warning" >Hoàn tất<span class="glyphicon glyphicon-send" ></span></button>&nbsp;&nbsp;
        <a href="{{ url('admin/user') }} }}"><button type="text"  class="btn btn-warning" >Trở lại <span class="glyphicon glyphicon-arrow-left"></span></button></a>
      </div>
</div>

</fieldset>
</form>
</div>
@endsection