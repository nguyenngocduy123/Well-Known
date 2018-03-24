<?php 
	namespace App\Http\Controllers\Fontend;
	use App\Http\Controllers\Controller;
	/**
	* 
	*/
	use DB;
	//bát các form control
	use Request;
	
	class NewsController extends Controller
	{
		
			public function list_cate($lang,$cate){
			// $data["arr"]=DB::select("select * FROM tbl_news INNER JOIN tbl_category_news on tbl_news.fk_category_id = tbl_category_news.pk_category_id   WHERE tbl_category_news.c_slug='$cate' and tbl_news.fk_lang_id = $lang");
			$data["arr"]=DB::table('tbl_news')->join('tbl_category_news',function($join)use($lang, $cate){				
				$join->on('tbl_news.fk_category_id','=','tbl_category_news.pk_category_id')->where('tbl_news.fk_lang_id','=',$lang)->where('tbl_category_news.c_slug','=',$cate)->where('tbl_news.c_show','=',1);

			})->select('tbl_news.pk_news_id','tbl_news.fk_category_id','tbl_news.fk_lang_id','tbl_news.c_title','tbl_news.c_desc','tbl_news.c_content','tbl_news.c_img','tbl_news.c_avt','tbl_news.slug','tbl_category_news.c_slug')->orderBy("tbl_news.pk_news_id","desc")->paginate(5);

				
			if($data["arr"]->count()>0 && $data["arr"]->count()<(($data["arr"]->count())+1)){
				
			    return view("fontend.icc",$data);
			} else {
				return view("errors.404");
			}

			
		}
		public function news($lang,$id){
			// $data["arr"]=DB::table('tbl_news')->where('fk_lang_id','=',$lang,'and','fk_category_id',"=",$id)->paginate(5);
			$data["lang"]=$lang;
			$data["id"]=$id;
			 $data["arr"] = DB::select("select * from tbl_news where fk_lang_id = $lang and pk_news_id = $id and c_show =1" );

			 return view("fontend.news",$data);
	}
	public function news_slug($lang,$slug){			
			$data["lang"]=$lang;
			$data["slug"]=$slug;
			// $data["c_title"]=$title;
			if($lang==1 ||$lang==2 ||$lang==3){
			 $data["arr"] = DB::select("select * from tbl_news where fk_lang_id = $lang and slug=?", [ $slug ] );
	                     if($data["arr"]!=null){
	                     	$data["title"] =  DB::table('tbl_news')->where('fk_lang_id','=',$lang)->where('slug','=',$slug)->first();
$data["avt"] =  DB::table('tbl_news')->where('fk_lang_id','=',$lang)->where('slug','=',$slug)->first();
			 	return view("fontend.news",$data);
			        		}
		        	else{
			  				return view("errors.404");
			       		}	 	
			}
			else{
				return view("errors.404");
			}						
	}
	public function comment($lang,$id){
				$name = Request::get("name");
				$email = Request::get("mail");				
				$content = Request::get("content");
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$c_date = date('d/m/Y H:i:s');
				DB::insert("insert into tbl_comment (c_name,c_email,c_content,c_status,fk_news_id,c_date) values ('$name','$email','$content',0,$id,'$c_date')");
					return redirect("lg/$lang/tin-tuc/$id");
	}
public function list_videos(){
			$data["arr"]=DB::table('tbl_videos')->where('c_show','=',1)->orderBy("pk_videos_id","desc")->paginate(5);
			if($data["arr"]->count()>0 && $data["arr"]->count()<(($data["arr"]->count())+1)){
				
			    return view("fontend.iccvideo",$data);
			} else {
				return view("errors.404");
			}

			
		}
		public function videos($slug){
		
			
			$data["slug"]=$slug;
			 $data["arr"] = DB::table('tbl_videos')->where('c_slug','=',$slug)->get();
			 if($data["arr"]!=null){
	                    $data["title"] =  DB::table('tbl_videos')->where('c_slug','=',$slug)->first();
						$data["avt"] =  DB::table('tbl_videos')->where('c_slug','=',$slug)->first();
DB::update("update tbl_videos set c_view = c_view + 1 where c_slug = '$slug' ");
			 	return view("fontend.newvideos",$data);
			        		}
		        	else{
			  				return view("errors.404");
			       		}
			 
	}
}
?>