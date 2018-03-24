<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	/**
	* 
	*/
	use DB;
	use Session;
	use Request;
	class NewsController extends Controller
	{
		
		public function list_news(){
			$data["arr"]=DB::table("tbl_news")->orderBy("pk_news_id","desc")->paginate(10);
			return view("admin.news",$data);
		}
		public function list_news_cate($lang,$id){
			// $data["arr"]=DB::table('tbl_news')->where('fk_lang_id','=',$lang,'and','fk_category_id',"=",$id)->paginate(5);
			 $data["arr"] = DB::select("select * from tbl_news where fk_lang_id = $lang and fk_category_id = $id");
			 return view("admin.newFK",$data);
			
		}
		  public function delete($id){
            DB::delete("delete from tbl_news where pk_news_id=$id");
            return redirect("admin/news");
        }
 public function check($id){
		    	
            	DB::delete("update tbl_news set c_hot = 2 where pk_news_id=$id");
            	return redirect("admin/news");
        }
           public function uncheck($id){
           		
            	DB::delete("update tbl_news set c_hot = 0 where pk_news_id=$id");
            	return redirect("admin/news");
        }
		 public function hot($id){
		    	
            	DB::delete("update tbl_news set c_hot = 1 where pk_news_id=$id");
            	return redirect("admin/news");
        }
           public function unhot($id){
           		//$p=DB::table("tbl_videos")->where('pk_news_id','<=',$id)->count();
            	//$page=ceil($p/10);
            	DB::delete("update tbl_news set c_hot = 0 where pk_news_id=$id");
            	return redirect("admin/news");
        }
 public function an($id){
		    	
            	DB::delete("update tbl_news set c_show = 0 where pk_news_id=$id");
            	return redirect("admin/news");
        }
           public function hien($id){
           		
            	DB::delete("update tbl_news set c_show = 1 where pk_news_id=$id");
            	return redirect("admin/news");
        }
		public function edit($id){
			$data["arr"] = DB::table('tbl_news')->where('pk_news_id','=',$id)->first(); 
			$data["form_url"] = url("/admin/news/do_edit/".$id);
				return view("admin.add_edit_news",$data);
		}
		public function do_edit($id){
			//$form_url = 
			$c_title = addslashes(Request::get('c_title'));
			$fk_category_id = Request::get('fk_category_id');
			$fk_lang_id = Request::get('fk_lang_id');			
			$c_desc = Request::get('c_desc');
			$c_content = addslashes(Request::get('c_content'));
			$c_hot = Request::get("c_hot");
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$c_date = date('d/m/Y H:i:s');
			$c_avt = Request::get("c_avt");
			//$c_img = "";
		// if (Request::hasFile('c_img')){
		// 	$c_img = Request::file("c_img")->getClientOriginalName();
		// }
			
			 if($fk_lang_id ==3){
		   		$slug = Request::get('c_slug');
		   }
		   else {
		   
			
		   		$slug=str_slug($c_title,'-'); 
		   	}
			
		  


			DB::update("update tbl_news set c_title = '$c_title',fk_category_id='$fk_category_id',fk_lang_id='$fk_lang_id',c_desc='$c_desc',c_content='$c_content',c_date = '$c_date',c_hot = '$c_hot',c_avt='$c_avt' where pk_news_id = $id");


		// 	if(!empty($c_img)){
		// 	$c_img = time()."_".$c_img;
		// 	//upload anh
		// 	Request::file("c_img")->move("public/upload",$c_img);
		// 	DB::update("update tbl_news set c_img='$c_img' where pk_news_id=$id");
		// }
			return redirect("admin/news");
			//upload





		}
		
			public function add(){
				 Session::forget('ss');
				$data["form_url"] = url("/admin/news/do_add/");
				return view("admin.add_edit_news",$data);
		}

        public function do_add(){
            $c_title = addslashes(Request::get('c_title'));
			$fk_category_id = Request::get('fk_category_id');
			$fk_lang_id = Request::get('fk_lang_id');			
			$c_desc = Request::get('c_desc');
			$c_content = addslashes(Request::get('c_content'));
			$c_hot = Request::get("c_hot");
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$c_date = date('d/m/Y H:i:s');

			$c_avt = Request::get("c_avt");
			
			//======uni slug
			 

		   if($fk_lang_id ==3){
		   		$slug = Request::get('c_slug');
		   }
		   else {
		   			$slug=str_slug($c_title,'-'); 
		   	}

		// 		$c_img = "";
		// if (Request::hasFile('c_img')){
		// 	$c_img = Request::file("c_img")->getClientOriginalName();
		// 	$c_img = time()."_".$c_img;
		// 	Request::file("c_img")->move("public/upload",$c_img);
		// }
							   		
           $check = DB::table("tbl_news")->where("slug","=",$slug)->count();
       		if($check == 0){
					 DB::Insert("Insert into tbl_news(c_title,fk_category_id,fk_lang_id,c_desc,c_content,c_hot,c_date,c_avt,slug) values('$c_title','$fk_category_id','$fk_lang_id','$c_desc','$c_content','$c_hot','$c_date','$c_avt','$slug')");
					 Session::forget('ss');
            			return redirect("admin/news");
			}
				else {
			Session::put('ss','(*) Danh mục này đã tồn tại. Vui lòng kiểm tra lại!');
			$data["form_url"] = url("/admin/news/do_add/");
			return view("admin.add_edit_news",$data);
		}	

		}
	}
?>