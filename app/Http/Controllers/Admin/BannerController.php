<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    /**
    * 
    */
    use DB;
    use Request;
    class BannerController extends Controller
    {
        
            public function list_slide()
        {

            //$data["category"] = DB::select("select * from category");
            $data["banner"] = DB::table("tbl_banner")->orderBy('pk_banner_id','desc')->paginate(5);
            return view("admin.banner",$data);
            
        }
            public function add(){
                $data["form_url"] = url("/admin/banner/do_add/");
                return view("admin.add_edit_banner",$data);
        }
        public function do_add(){
            $status = Request::get("status");
            $position = Request::get("c_position");  
            $img = Request::get("c_img");   
 

            DB::Insert("Insert into tbl_banner(c_img,c_show,c_position) values('$img',$status,$position)");

            return redirect("admin/banner");
        }

        public function delete($id){
            DB::delete("delete from tbl_banner where pk_banner_id=$id");
            return redirect("admin/banner");
        }
 public function cong($id){
            DB::delete("update tbl_banner set c_position = c_position +1 where pk_banner_id=$id");
            return redirect("admin/banner");
        }
 public function tru($id){
            DB::delete("update tbl_banner set c_position = c_position - 1 where pk_banner_id=$id");
            return redirect("admin/banner");
        }


        public function edit($id){
            //$data["user"] = DB::select("select * from users where id = $id");
            $data["banner"] = DB::table('tbl_banner')->where('pk_banner_id','=',$id)->first(); 
            $data["form_url"] = url("/admin/banner/do_edit/".$id);
                return view("admin.add_edit_banner",$data);
        }
	   public function check($id){
		    	
            	DB::delete("update tbl_banner set c_show = 1 where pk_banner_id=$id");
            	return redirect("admin/banner");
        }
           public function uncheck($id){
           		
            	DB::delete("update tbl_banner set c_show = 0 where pk_banner_id=$id");
            	return redirect("admin/banner");
        }

        public function do_edit($id){
              $status = Request::get("status");
              $position = Request::get("c_position");  
              $img = Request::get("c_img");   


            DB::update("update tbl_banner set c_img='$img',c_show='$status',c_position='$position' where pk_banner_id = $id");
            return redirect("admin/banner");
            
        }
    }


?>