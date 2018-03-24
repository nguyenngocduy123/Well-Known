@extends('admin.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
<fieldset>
    <legend>Category</legend>
    <div class="text-right" style="clear:both"><a href="{{ url('admin/category/add') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></a></div>
 
    	<table class="table table-hover table-bordered">
        	<thead class="bg-primary">
            	<th class="text-center">ID</th>
                <th class="text-center">Tên</th>
                 <th class="text-center">Slug</th>
                <th class="col-md-2 text-center">Tác vụ</th>
            </thead>
            <tbody>
            <?php 
                    $stt=0;
                    foreach ($category as $value) {      
                        $stt++;
                    
                ?>
            	<tr>
                <td class="text-center">{{ $value->pk_category_id }}</td>
                <td>{{ $value->c_name }}</td>
                 <td>{{ $value->c_slug }}</td>
                <td class="text-center">
                <a href="{{ url("admin/category/edit")}}/{{ $value->pk_category_id }}" title="Edit"><i class="glyphicon glyphicon-pencil"></i >
                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url("admin/category/delete") }}/{{ $value->pk_category_id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"> 
                                        </i >
                        </a>
                </td>
            </tr>
                  <?php } ?>
                
            </tbody>
        </table>
        <?php
                echo $category->render();
            ?>
    </fieldset>
    </div>
    @endsection