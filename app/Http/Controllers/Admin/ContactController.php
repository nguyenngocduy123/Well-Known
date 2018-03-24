<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    /**
    * 
    */
    use DB;
    use Request;
    class ContactController extends Controller
    {
        
            public function list_contact()
        {

            //$data["category"] = DB::select("select * from category");
            $data["contact"] = DB::table("tbl_contact")->orderBy('pk_contact_id','desc')->paginate(10);
            return view("admin.contact",$data);
            
            }

        public function delete($id){
            DB::delete("delete from tbl_contact where pk_contact_id=$id");
            return redirect("admin/contact");
        }

               public function check($id){
            DB::delete("update tbl_contact set c_status = 1 where pk_contact_id=$id");
            return redirect("admin/contact");
        }
           public function uncheck($id){
            DB::delete("update tbl_contact set c_status = 0 where pk_contact_id=$id");
            return redirect("admin/contact");
        }

    }

       
    


?>