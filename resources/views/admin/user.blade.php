@extends('admin.layout')
@section('content')
<style type="text/css">
	.pagination{padding: 0px; margin: 0px;}
</style>
<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2	 main">
         
         <div class="text-right" style="margin-bottom: 10px;"><a href="{{ url('admin/user/add') }}"><input type="button" class="btn btn-primary" name="btn_submit" value="Thêm mới"></a></div>
         
          <div class="table-responsive">
            <table class="table table-hover table-condensed table-bordered">
              <thead>
                <tr class="danger">
                  <th class="text-center col-md-1">STT</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Mail</th>
                  <th class="text-center">Manager</th>                 
                </tr>
              </thead>
              <tbody>
              <?php
					$stt=0;
					foreach ($user as $value) {
						$stt++;
					
				 ?>
                <tr>
                  <td>{{ $stt }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->email }}</td>
                  <td>
                  	<a href="{{ url("/admin/user/edit") }}/{{ $value->id }}" title="Edit"><i class="glyphicon glyphicon-pencil"></i ></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="{{ url("/admin/user/delete") }}/{{ $value->id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"></i >	</a>

                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            {{ $user->render() }}
          </div>

        </div>
@endsection