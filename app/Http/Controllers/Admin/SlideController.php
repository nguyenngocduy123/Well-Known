<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    /**
    * 
    */
    use DB;
    use Request;
    class SlideController extends Controller
    {
        
            public function list_slide()
        {

            //$data["category"] = DB::select("select * from category");
            $data["slide"] = DB::table("tbl_slide")->orderBy("c_position","desc")->orderBy('pk_slide_id','desc')->paginate(5);
DB::update("update tbl_slide set c_position =0 where c_show =0 ");
            return view("admin.slide",$data);
            
        }
            public function add(){
                $data["form_url"] = url("/admin/slide/do_add/");
                return view("admin.add_edit_slide",$data);
        }
        public function do_add(){
            $status = Request::get("status");
            $position = Request::get("c_position");  
            $img = Request::get("c_img");   
 

            DB::Insert("Insert into tbl_slide(c_img,c_show,c_position) values('$img',$status,$position)");

            return redirect("admin/slide");
        }

        public function delete($id){
            DB::delete("delete from tbl_slide where pk_slide_id=$id");
            return redirect("admin/slide");
        }
 public function cong($id){
            DB::delete("update tbl_slide set c_position = c_position +1 where pk_slide_id=$id");
            return redirect("admin/slide");
        }
 public function tru($id){
            DB::delete("update tbl_slide set c_position = c_position - 1 where pk_slide_id=$id");
            return redirect("admin/slide");
        }


        public function edit($id){
            //$data["user"] = DB::select("select * from users where id = $id");
            $data["slide"] = DB::table('tbl_slide')->where('pk_slide_id','=',$id)->first(); 
            $data["form_url"] = url("/admin/slide/do_edit/".$id);
                return view("admin.add_edit_slide",$data);
        }
	   public function check($id){
		    	
            	DB::delete("update tbl_slide set c_show = 1 where pk_slide_id=$id");
            	return redirect("admin/slide");
        }
           public function uncheck($id){
           		
            	DB::delete("update tbl_slide set c_show = 0 where pk_slide_id=$id");
            	return redirect("admin/slide");
        }

        public function do_edit($id){
              $status = Request::get("status");
              $position = Request::get("c_position");  
              $img = Request::get("c_img");   


            DB::update("update tbl_slide set c_img='$img',c_show='$status',c_position='$position' where pk_slide_id = $id");
            return redirect("admin/slide");
            
        }
    }


?>