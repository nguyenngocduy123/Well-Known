@extends('admin.layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
    <fieldset>
    <legend>List Slide</legend>
    <div class="text-right"><a href="{{ url('admin/slide/add') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></a></div>
    <div class="input-group">
                  <input type="text" class="form-control" style="padding:5px; margin:5px;" name="txtsearch" placeholder=" Search...">
                  <div class="input-group-addon" style="padding:5px; margin:5px;"><button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button></div>
                </div>

    	<table class="table table-hover table-bordered">
        	<thead class="bg-primary">
            	<th class="text-center">ID</th>
                <th class="col-md-5 text-center">Ảnh</th>
                <th class="text-center">Trạng thái</th>
                <th class="col-md-1 text-center">Vị trí</th>
                <th class="col-md-3 text-center">Tác vụ</th>
            </thead>
            <tbody>
            <?php 
                    $stt=0;
                    foreach ($slide as $value) {      
                        $stt++;
                    
                ?>
            	<tr>
                <td class="text-center">{{ $value->pk_slide_id }}</td>
                <td class="text-center">                
                        <img src="{{ $value->c_img }}" style="width: 500px;">                   
                </td>
              
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
                  <td class="text-center">{{ $value->c_position }}
<br>
<a href="{{ url("/admin/slide/cong") }}/{{ $value->pk_slide_id }}" title="Up"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>&nbsp;&nbsp;
<a href="{{ url("/admin/slide/tru") }}/{{ $value->pk_slide_id }}" title="Down"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
</td>
                <td class="text-center">
<?php  if($value->c_show==0){ ?>
                          <a href="{{ url('admin/slide/check') }}/{{ $value->pk_slide_id }}"  title="Hiện "><span style="color:blue" class="fa fa-check"></span></a>
                       <?php }else{ ?>
                            <a href="{{ url('admin/slide/uncheck') }}/{{ $value->pk_slide_id }}"  title="Ẩn"><span style="color:red" class="fa  fa-exclamation"></span></a>
                        <?php } ?> &nbsp;
                <a href="<?php echo url('admin/slide/edit')."/".$value->pk_slide_id;?>" title="Edit"><i class="glyphicon glyphicon-pencil">               </i ></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url("/admin/slide/delete") }}/{{ $value->pk_slide_id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"> 
                                        </i ></</a></td>
                </tr>
                
                    <?php } ?>
                
            </tbody>
        </table>
        {{ $slide->render() }}
    </fieldset>
    </div>
    @endsection