@extends('admin.layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
    <fieldset>
    <legend>List news</legend>
    <div class="text-right"><a href="{{ url('admin/news/add') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></a></div>
    <div class="input-group">
                  <input type="text" class="form-control" style="padding:5px; margin:5px;" name="txtsearch" placeholder=" Search...">
                  <div class="input-group-addon" style="padding:5px; margin:5px;"><button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button></div>
                </div>

    	<table class="table table-hover table-bordered">
        	<thead class="bg-primary">
            	<th class="text-center">ID</th>
                <th class="col-md-2 text-center">Ảnh</th>
                <th class="text-center">Tiêu đề</th>
                <th class="col-md-2 text-center">Thuộc danh mục</th>
                <th class="col-md-2 text-center">Slug</th>
                <th class="col-md-2 text-center">Tác vụ</th>
            </thead>
            <tbody>
            <?php 
                    $stt=0;
                    foreach ($arr as $value) {      
                        $stt++;
                    
                ?>
            	<tr>
                <td class="text-center">{{ $value->pk_news_id }}</td>
                <td>                
                        <img src="{{ $value->c_avt }}" style="width: 100px;">                   
                </td>
                <td><a href="{{ url('/lg') }}/{{ $value->fk_lang_id }}/tin-tuc/{{ $value->slug }}" target="_blank" /> {{ $value->c_title }} </a></td>
                <td><?php
                            $cat = DB::table("tbl_category_news")->where("pk_category_id","=",$value->fk_category_id)->first();
                            echo $cat->c_name;
                        ?>
                        
                </td>
                <td>
                    {{ $value->slug }}
                </td>
                <td class="text-center">
                <a href="<?php echo url('admin/news/edit')."/".$value->pk_news_id;?>" title="Edit"><i class="glyphicon glyphicon-pencil">               </i ></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url("/admin/news/delete") }}/{{ $value->pk_news_id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"> 
                                        </i ></</a></td>
                </tr>
                
                    <?php } ?>
                
            </tbody>
        </table>
      
    </fieldset>
    </div>
    @endsection