@extends('fontend.layout') 
@section('content') 
    
    
  	<div class="contact" id="contact">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 col-md-offset-2">
                    	<h1>BẢN ĐỒ</h1>
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10QU388DYHDEd8hwveYKDhNtOgaA" width="640" height="480"></iframe>

                    </div>
                </div>
                
                        
			<div class="row">
            	<div class="col-md-8 col-md-offset-2">
                	<h3 style="color:#d82731" id="lienhe">Yêu cầu tư vấn miễn phí</h3>
                <form role="form" id="contactForm" action="{{ url('contact/add') }}" method="post">
                 <input type="hidden" name="_token" value="{{csrf_token() }}"></input>
                 <div class="row">
                       <div class="form-group col-sm-6">
                            <label for="name" class="h4">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Họ và tên" required name="name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="mail" class="h4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email liên hệ" required name="mail">
                        </div>
                 </div>
                 <div class="row">
                       <div class="form-group col-sm-6">
                            <label for="name" class="h4">Adress</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" name="address" >
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="name" class="h4">Telephone</label>
                            <input type="tel" class="form-control" placeholder="Số điện thoại" required  name="phone">
                        </div>
                 </div>
                    
                    <div class="form-group">
                        <label for="message" class="h4 ">Message</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Tin nhắn" required name="content"></textarea>
                    </div>
                    <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
        		<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
    		</form>               
                    
                </div>
            </div>
            </div>
        </div>
        @endsection 