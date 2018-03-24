<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    /**
    * 
    */
    use DB;
    use Request;
    class CommentController extends Controller
    {
        
            public function list_comment()
        {

            //$data["comment"] = DB::select("select * from comment");
            $data["comment"] = DB::table("tbl_comment")->paginate(6);
            return view("admin.comment",$data);
            
        }

        public function delete($id){
            DB::delete("delete from tbl_comment where pk_comment_id=$id");
            return redirect("admin/comment");
        }
          public function check($id){
            $p=DB::table("tbl_comment")->where('pk_comment_id','<=',$id)->count();
            $page=ceil($p/6);
            DB::delete("update tbl_comment set c_status = 1 where pk_comment_id=$id");
            return redirect("admin/comment?page=$page");
        }
           public function uncheck($id){
             $p=DB::table("tbl_comment")->where('pk_comment_id','<=',$id)->count();
            $page=ceil($p/6);
            DB::delete("update tbl_comment set c_status = 0 where pk_comment_id=$id");
            return redirect("admin/comment?page=$page");
        }


        public function edit($id){
            //$data["user"] = DB::select("select * from users where id = $id");
            $data["arr"] = DB::table('tbl_comment')->where('pk_comment_id','=',$id)->first(); 
            $data["form_url"] = url("/admin/comment/do_edit/".$id);
                return view("admin.edit_comment",$data);
        }


        public function do_edit($id){
            $content = Request::get("c_content");      
            DB::update("update tbl_comment set c_content = '$content' where pk_comment_id = $id");
            return redirect("admin/comment");
            
        }
    }


?>