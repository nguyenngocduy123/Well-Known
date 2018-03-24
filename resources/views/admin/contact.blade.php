@extends('admin.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well">
<fieldset>
    <legend>Contact</legend>
 
    	<table class="table table-hover table-bordered">
        	<thead class="bg-primary">
            	<th class="text-center">STT</th>
                <th class="text-center">Name</th>
                <th class="text-center" style="width:70px;">Mail</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Content</th>
<th class="text-center">Date</th>
                <th class="text-center">Status</th>
                <th class="col-md-2 text-center">Tác vụ</th>
            </thead>
            <tbody>
            <?php 
                    $stt=0;
                    foreach ($contact as $value) {      
                        $stt++;
                    
                ?>
            	<tr>
                <td class="text-center">{{ $stt }}</td>
                <td class="text-center">{{ $value->c_name }}</td>
                <td class="text-center">{{ $value->c_mail }}</td>
                <td class="text-center">{{ $value->c_phone }}</td>
                <td>{{ $value->c_content }}
<td>{{ $value->c_date }}
                </td>
                <td class="text-center"><?php if ( $value->c_status ==0) {
                     echo "";
                }
                    else
                        echo "Checked";
                 ?></td>
                <td class="text-center">
                <a href="{{ url("admin/contact/check")}}/{{ $value->pk_contact_id }}" title="Check" onclick="return window.confirm('Are You Check?')"><i class="glyphicon glyphicon-ok"></i >
                </a> &nbsp;&nbsp;&nbsp;
                <a href="{{ url("admin/contact/uncheck")}}/{{ $value->pk_contact_id }}" title="UnCheck" onclick="return window.confirm('Are You UnCheck?')"><i class="glyphicon glyphicon-eye-close"></i >
                </a> &nbsp;&nbsp;&nbsp;
                
                        <a href="{{ url("admin/contact/delete") }}/{{ $value->pk_contact_id }}" onclick="return window.confirm('Are You Delete?')" title="Delete"><i class="glyphicon glyphicon-remove"> 
                                        </i >
                        </a>
                </td>
            </tr>
                  <?php } ?>
                
            </tbody>
        </table>
        <?php
                echo $contact->render();
            ?>
    </fieldset>
    </div>
    @endsection