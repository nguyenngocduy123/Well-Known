@extends('admin.layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
    <fieldset>
    <legend>List facehome</legend>
    <div class="text-right"><a href="{{ url('admin/facehome/add') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></a></div>
    <div class="input-group">
                  <input type="text" class="form-control" style="padding:5px; margin:5px;" name="txtsearch" placeholder=" Search...">
                  <div class="input-group-addon" style="padding:5px; margin:5px;"><button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button></div>
                </div>

    	<table class="table table-hover table-bordered">
        	<thead class="bg-primary">
            	<th class="text-center">ID</th>
                <th class="col-md-5 text-center">Code Nhúng</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Name</th>
                <th class="col-md-1 text-center">Vị trí</th>
                <th class="col-md-3 text-center">Tác vụ</th>
            </thead>
            <tbody>
            <?php 
                    $stt=0;
                    foreach ($facehome as $value) {      
                        $stt++;
                    
                ?>
            	<tr>
                <td class="text-center">{{ $value->pk_facehome_id }}</td>
                <td class="text-center">                
                       {!! $value->c_embed !!}                  
                </td>
                <td class="text-center">{{ $value->c_name }}</td>
                <td class="text-center">
                    <?php 
                        if(($value->c_show) ==1){
                            echo "Hiện";
                        }
                        else {
                            echo "Ẩn";
                        }
                    ?>    
                </td>
                
                  <td class="text-center">{{ $value->c_position }}</td>
                <td class="text-center">
                <a href="<?php echo url('admin/facehome/edit')."/".$value->pk_facehome_id;?>" title="Edit"><i class="glyphicon glyphicon-pencil">               </i ></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url("/admin/facehome/delete") }}/{{ $value->pk_facehome_id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"> 
                                        </i ></</a></td>
                </tr>
                
                    <?php } ?>
                
            </tbody>
        </table>
        {{ $facehome->render() }}
    </fieldset>
    </div>
    @endsection