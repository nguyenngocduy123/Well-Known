@extends('admin.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
<fieldset>
    <legend>Category</legend>
 
    	<table class="table table-hover table-bordered">
        	<thead class="bg-primary">
            	<th class="text-center">STT</th>
                <th class="text-center" style="width:70px;">Mail</th>
                <th class="text-center">Content</th>
                <th class="text-center">news ID</th>
                <th class="text-center">Status</th>
                <th class="col-md-3 text-center">Tác vụ</th>
            </thead>
            <tbody>
            <?php 
                    $stt=0;
                    foreach ($comment as $value) {      
                        $stt++;
                    
                ?>
            	<tr>
                <td class="text-center">{{ $stt }}</td>
                <td class="text-center">{{ $value->c_email }}</td>
                <td class="text-center">{{ $value->c_content }}</td>
                <td>
                    <?php 
                        $cat = DB::select("select * from tbl_news where pk_news_id = $value->fk_news_id");
                        foreach($cat as $rows_cat)
                            {
                    ?>
                    <a href="{{ url('/lg') }}/{{ $rows_cat->fk_lang_id }}/tin-tuc/{{ $rows_cat->pk_news_id }}" target="_blank" /> {{ $rows_cat->c_title }} </a>

                    <?php } ?>
                </td>
                <td class="text-center"><?php if ( $value->c_status ==0) {
                     echo "";
                }
                    else
                        echo "Checked";
                 ?></td>
                <td class="text-center">
                <a href="{{ url("admin/comment/check")}}/{{ $value->pk_comment_id }}" title="Check" onclick="return window.confirm('Are You Check?')"><i class="glyphicon glyphicon-ok"></i >
                </a> &nbsp;&nbsp;&nbsp;
                <a href="{{ url("admin/comment/uncheck")}}/{{ $value->pk_comment_id }}" title="UnCheck" onclick="return window.confirm('Are You UnCheck?')"><i class="glyphicon glyphicon-eye-close"></i >
                </a> &nbsp;&nbsp;&nbsp;
                <a href="{{ url("admin/comment/edit")}}/{{ $value->pk_comment_id }}" title="Edit"><i class="glyphicon glyphicon-pencil"></i >
                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url("admin/comment/delete") }}/{{ $value->pk_comment_id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"> 
                                        </i >
                        </a>
                </td>
            </tr>
                  <?php } ?>
                
            </tbody>
        </table>
        <?php
                echo $comment->render();
            ?>
    </fieldset>
    </div>
    @endsection