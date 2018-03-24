<?php 
	namespace App\Http\Controllers\Fontend;
	use App\Http\Controllers\Controller;
	/**
	* 
	*/
	use DB;
	//bát các form control
	use Request;
	
	class ContactController extends Controller
	{
		
		public function add(){
				$name = Request::get("name");
				$email = Request::get("mail");
				$phone = Request::get("phone");
				$address = Request::get("address");
				$content = Request::get("content");
$ten =addslashes($name);
$mail=addslashes($email);
$dt =addslashes($phone);
$dc =addslashes($address);
$nd =addslashes($content);
date_default_timezone_set('Asia/Ho_Chi_Minh');
			$c_date = date('d/m/Y H:i:s');
				DB::insert("insert into tbl_contact (c_name,c_mail,c_phone,c_address,c_content,c_status,c_date) values ('$ten','$mail','$dt','$dc','$nd',0,'$c_date')");
					return redirect("contact");
		}
		
	}
?>