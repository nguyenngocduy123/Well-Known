<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Http\Controllers\Admin\UniController;
	//bát các form control
	use Request;
	use Hash;
	use Session;
	use DB;
	


	/**
	* 
	*/
	class videosController extends Controller
	{
		
		public function listvideos(){
			
			$data["videos"] = DB::table("tbl_videos")->orderBy("pk_videos_id","desc")->paginate(10);
			 
				return view("admin.videos",$data);
				
		}

		   public function check($id){
		    	//$p=DB::table("tbl_videos")->where('pk_news_id','<=',$id)->count();
            	//$page=ceil($p/10);
            	DB::delete("update tbl_videos set c_show = 1 where pk_videos_id=$id");
            	return redirect("admin/albumvideos");
        }
           public function uncheck($id){
           		//$p=DB::table("tbl_videos")->where('pk_news_id','<=',$id)->count();
            	//$page=ceil($p/10);
            	DB::delete("update tbl_videos set c_show = 0 where pk_videos_id=$id");
            	return redirect("admin/albumvideos");
        }
	   public function hot($id){
		    	//$p=DB::table("tbl_videos")->where('pk_news_id','<=',$id)->count();
            	//$page=ceil($p/10);
            	DB::delete("update tbl_videos set c_hot = 1 where pk_videos_id=$id");
            	return redirect("admin/albumvideos");
        }
           public function unhot($id){
           		//$p=DB::table("tbl_videos")->where('pk_news_id','<=',$id)->count();
            	//$page=ceil($p/10);
            	DB::delete("update tbl_videos set c_hot = 0 where pk_videos_id=$id");
            	return redirect("admin/albumvideos");
        }
        public function delete($id){
			DB::delete("delete from tbl_videos where pk_videos_id=$id");
			return redirect("admin/albumvideos");
		}

        public function edit($slug){
			$data["arr"] = DB::table('tbl_videos')->where('c_slug','=',$slug)->first(); 
			$data["form_url"] = url("/admin/albumvideos/do_edit/".$slug);
				return view("admin.add_edit_videos",$data);
		}
		public function do_edit($slug){
			$uni = new UniController();
			$c_title = addslashes(Request::get("c_title"));
			$c_desc = Request::get("c_desc");
			$c_desc = $uni->removeP($c_desc);
			$c_content = Request::get("c_content");
			$c_embed = Request::get("c_embed");
			$c_img = Request::get("c_img");
			$c_show = Request::get('c_show');
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$c_date = date('d/m/Y H:i:s');

			
			
			DB::update("update tbl_videos set c_title='$c_title',c_desc='$c_desc',c_content='$c_content',c_img='$c_img',updated_at='$c_date',c_show='$c_show',c_embed='$c_embed' where c_slug='$slug'");
			return redirect("/admin/albumvideos");

		}

		public function add(){
			
				// Session::forget('ss');
				$data["form_url"] = url("/admin/albumvideos/do_add/");
				return view("admin.add_edit_videos",$data);
					
				
		}

		public function do_add(){
			$uni = new UniController();
			$c_title = addslashes(Request::get("c_title"));
			$c_desc = Request::get("c_desc");
			$c_desc = $uni->removeP($c_desc);
			$c_content = Request::get("c_content");
			$c_embed = Request::get("c_embed");
			$c_show = Request::get('c_show');
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$c_date = date('d/m/Y H:i:s');
		//$c_time=time('H:i');


			$c_img = Request::get('c_img');
			
		$slug=str_slug($c_title,'-'); 

			

			$check = DB::table("tbl_videos")->where("c_slug","=",$slug)->count();
			//print_r($data["arr"]);
			if($check == 0){		
				DB::insert("insert into tbl_videos(c_title,c_desc,c_content,c_img,c_slug,created_at,updated_at,c_show,c_embed) values('$c_title','$c_desc','$c_content','$c_img','$slug','$c_date','$c_date','$c_show','$c_embed')");
				Session::forget('ss');
				return redirect("/admin/albumvideos");
			}
			else {
				Session::put('ss','(*) Danh mục này đã tồn tại. Vui lòng kiểm tra lại!');
				return redirect("/admin/albumvideos/add");
			}
		}



	}

?>