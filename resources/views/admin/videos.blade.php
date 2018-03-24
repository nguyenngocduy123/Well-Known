@extends('admin.layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
    <fieldset>
        <legend>List videos</legend>
        <div class="text-right"><a href="{{ url('admin/albumvideos/add') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></a></div>
        <div class="input-group">
          <input type="text" class="form-control" style="padding:5px; margin:5px;" name="txtsearch" placeholder=" Search...">
          <div class="input-group-addon" style="padding:5px; margin:5px;"><button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button></div>
      </div>

      <table class="table table-hover table-bordered">
       <thead class="bg-primary">
           <th class="text-center">ID</th>
           <th class="col-md-2 text-center">Ảnh</th>
           <th class="text-center">Tiêu đề</th>
           <th class="col-md-2 text-center">Tinh trạng</th>

           <th class="col-md-2 text-center">Tác vụ</th>
       </thead>
       <tbody>
        <?php 
        foreach ($videos as $value) {      

            ?>
            <tr>
                <td class="text-center">{{ $value->pk_videos_id }}</td>
                <td>                
                    <img src="{{ $value->c_img }}" style="width: 150px;">                  
                </td>
                <td>
                    <iframe width="400" height="214" src="https://www.youtube.com/embed/{{ $value->c_embed }}" frameborder="0" allowfullscreen></iframe><br>
                    <a href="" target="_blank" /> {{ $value->c_title }} </a>
                </td>
                <td>
                    {{ $value->created_at }}<br>
                        {{ $value->updated_at }}<br>
                    Trạng thái: <span style="color:red; font-weight:bold;">
                                <?php 
                                    if($value->c_show==1){
                                        echo "Hiện"."<br>";
                                    }
                                    else
                                        { echo "Ẩn"."<br>"; }
                                ?></span>
                                SL View: <span style="color:red; font-weight:bold;">{{ $value->c_view }}</span>
                                <br>
                </td>

                <td class="text-center">
 <?php  if($value->c_hot==0){ ?>
                          <a href="{{ url('admin/albumvideos/hot') }}/{{ $value->pk_videos_id }}"  title="Check hot album {{ $value->c_title }} "><span style="color:blue" class="glyphicon glyphicon-flag"></span></a>
                       <?php }else{ ?>
                            <a href="{{ url('admin/albumvideos/unhot') }}/{{ $value->pk_videos_id }}"  title="Un check Hot album {{ $value->c_title }}"><span style="color:red" class="glyphicon glyphicon-glass"></span></a>
                        <?php } ?> &nbsp;

                    <?php  if($value->c_show==0){ ?>
                          <a href="{{ url('admin/albumvideos/check') }}/{{ $value->pk_videos_id }}"  title="Hiện album {{ $value->c_title }} "><span style="color:blue" class="fa fa-check"></span></a>
                       <?php }else{ ?>
                            <a href="{{ url('admin/albumvideos/uncheck') }}/{{ $value->pk_videos_id }}"  title="Ẩn album {{ $value->c_title }}"><span style="color:red" class="fa  fa-exclamation"></span></a>
                        <?php } ?> &nbsp;

                        <a href="{{ url('admin/albumvideos/edit') }}/{{ $value->c_slug }}" title="Sửa album {{ $value->c_title }}"><span class="glyphicon glyphicon-edit"></span></a>
                        &nbsp;
                          <a href="{{ url('admin/albumvideos/delete') }}/{{ $value->pk_videos_id }}" onclick="return window.confirm('Are You Delete?')" title="Xóa album {{ $value->c_title }}"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
</tr>

<?php } ?>

</tbody>
</table>
{{ $videos->render() }}
</fieldset>
</div>
@endsection