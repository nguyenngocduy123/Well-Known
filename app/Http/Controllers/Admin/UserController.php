<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	/**
	* 
	*/
	use DB;
	//bát các form control
	use Request;
	use Hash;
	class UserController extends Controller
	{
		
		public function list_user()
		{
		
		 // $data["user"] = DB::select("select * from users");
		 // foreach ($data["user"] as $rows_user) {
		 // 		echo $rows_user->email;
		 // 	}
			$data["user"] = DB::table("users")->paginate(4);
				return view("admin.user",$data);	

		}
		public function delete($id){
			DB::delete("delete from users where id=$id");
			return redirect("admin/user");
		}
		public function edit($id){
			//$data["user"] = DB::select("select * from users where id = $id");
			$data["arr"] = DB::table('users')->where('id','=',$id)->first(); 
			$data["form_url"] = url("/admin/user/do_edit/".$id);
				return view("admin.add_edit_user",$data);
		}
		public function add(){
				$data["form_url"] = url("/admin/user/do_add/");
				return view("admin.add_edit_user",$data);
		}
		public function do_add(){
			$name = Request::get("name");
			$email = Request::get("email");
			$pass = Request::get("password");
				if(!empty($pass)){
				$pass = Hash::make($pass);
				//DB::update("update users set password='$pass' where id = $id ");
			}
			DB::Insert("Insert into users(name,email,password) values('$name','$email','$pass')");

			return redirect("admin/user");
		
		}
		public function do_edit($id){
			$name = Request::get("name");
			$email = Request::get("email");
			$pass = Request::get("password");
			if(!empty($pass)){

				$pass = Hash::make($pass);
				//DB::update("update users set password='$pass' where id = $id ");
			}
			//echo $name;
			DB::update("update users set name='$name',email='$email',password='$pass' where id = $id");
			return redirect("admin/user");
			
		}	
	}
?>