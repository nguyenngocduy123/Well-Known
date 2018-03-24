<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    /**
    * 
    */
    use DB;
    use Request;
    class FacehomeController extends Controller
    {
        
            public function list_facehome()
        {

            //$data["category"] = DB::select("select * from category");
            $data["facehome"] = DB::table("tbl_facehome")->paginate(5);
            return view("admin.facehome",$data);
            
        }
            public function add(){
                $data["form_url"] = url("/admin/facehome/do_add/");
                return view("admin.add_edit_facehome",$data);
        }
        public function do_add(){
            $status = Request::get("status");
            $position = Request::get("c_position");  
            $embed = Request::get("c_embed");   
            $name = Request::get("c_name");   
 

            DB::Insert("Insert into tbl_facehome(c_embed,c_show,c_position,c_name) values('$embed',$status,$position,'$name')");

            return redirect("admin/facehome");
        }

        public function delete($id){
            DB::delete("delete from tbl_facehome where pk_facehome_id=$id");
            return redirect("admin/facehome");
        }


        public function edit($id){
            //$data["user"] = DB::select("select * from users where id = $id");
            $data["facehome"] = DB::table('tbl_facehome')->where('pk_facehome_id','=',$id)->first(); 
            $data["form_url"] = url("/admin/facehome/do_edit/".$id);
                return view("admin.add_edit_facehome",$data);
        }


        public function do_edit($id){
            $status = Request::get("status");
            $position = Request::get("c_position");  
            $embed = Request::get("c_embed");   
            $name = Request::get("c_name");   


            DB::update("update tbl_facehome set c_embed='$embed',c_show='$status',c_position='$position', c_name = '$name' where pk_facehome_id = $id");
            return redirect("admin/facehome");
            
        }
    }


?>