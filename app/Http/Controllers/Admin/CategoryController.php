<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    /**
    * 
    */
    use DB;
    use Request;
    class CategoryController extends Controller
    {
        
            public function list_category()
        {

            //$data["category"] = DB::select("select * from category");
            $data["category"] = DB::table("tbl_category_news")->paginate(6);
            return view("admin.category",$data);
            
        }
            public function add(){
                $data["form_url"] = url("/admin/category/do_add/");
                return view("admin.add_edit_category",$data);
        }
        public function do_add(){
            $name = Request::get("name");
            $lang = Request::get("lang");  
            $desc = Request::get("c_desc");   

            $str=$name;
            $unicode = array(
            'a'=>'A|á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'b'=>'B',
            'd'=>'đ|Đ|D',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|E',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị|I',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|O',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|U',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ|Y',
            'f'=>'F',
            'g'=>'G',
            'h'=>'H',
            'k'=>'K',
            'l'=>'L',
            'm'=>'M',
            'n'=>'N',
            'p'=>'P',
            'q'=>'Q',
            'c'=>'C',
            'r'=>'R',
            's'=>'S',
            't'=>'T',
            'v'=>'V',
            'x'=>'X',
            'z'=>'X',
            'w'=>'W',   
            
            );
            
           foreach($unicode as $nonUnicode=>$uni){
                $str = preg_replace("/($uni)/i", $nonUnicode, $str);
           }
           $str = str_replace(",", "-", $str);
          // $str = str_replace("'", "-", $str);
           $str = str_replace('"', '-', $str);
           $str = str_replace(".", "-", $str);       
           $str = str_replace(" ", "-", $str);
           $str = str_replace("?", "-", $str);
           $str = str_replace(":", "-", $str);
           $str = str_replace("\"","-", $str);       
           $str = str_replace("(", "-", $str); 
           $str = str_replace(")", "-", $str); 
           $str = str_replace('/','-', $str); 
          

           $slug=$str; 

            DB::Insert("Insert into tbl_category_news(c_name,fk_lang_id,c_desc,c_slug) values('$name','$lang','$desc','$slug')");

            return redirect("admin/category");
        }

        public function delete($id){
            DB::delete("delete from tbl_category_news where pk_category_id=$id");
            return redirect("admin/category");
        }


        public function edit($id){
            //$data["user"] = DB::select("select * from users where id = $id");
            $data["arr"] = DB::table('tbl_category_news')->where('pk_category_id','=',$id)->first(); 
            $data["form_url"] = url("/admin/category/do_edit/".$id);
                return view("admin.add_edit_category",$data);
        }


        public function do_edit($id){
            $name = Request::get("name");
            $lang = Request::get("lang");
            $desc = Request::get("c_desc"); 
            //======uni slug
            $str=$name;
            $unicode = array(
            'a'=>'A|á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'b'=>'B',
            'd'=>'đ|Đ|D',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|E',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị|I',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|O',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|U',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ|Y',
            'f'=>'F',
            'g'=>'G',
            'h'=>'H',
            'k'=>'K',
            'l'=>'L',
            'm'=>'M',
            'n'=>'N',
            'p'=>'P',
            'q'=>'Q',
            'c'=>'C',
            'r'=>'R',
            's'=>'S',
            't'=>'T',
            'v'=>'V',
            'x'=>'X',
            'z'=>'X',
            'w'=>'W',                   
            );
            
           foreach($unicode as $nonUnicode=>$uni){
                $str = preg_replace("/($uni)/i", $nonUnicode, $str);
           }
           $str = str_replace(",", "-", $str);
          // $str = str_replace("'", "-", $str);
           $str = str_replace('"', "-", $str);
           $str = str_replace(".", "-", $str);   
           $str = str_replace("(", "-", $str); 
           $str = str_replace(")", "-", $str);   
           $str = str_replace(" ", "-", $str);
           $str = str_replace("?", "-", $str);
           $str = str_replace(":", "-", $str);
           $str = str_replace("\"","-", $str);
           $str = str_replace('/','-', $str); 


           $slug=$str; 

            DB::update("update tbl_category_news set c_name='$name',fk_lang_id='$lang',c_desc='$desc',c_slug='$slug' where pk_category_id = $id");
            return redirect("admin/category");
            
        }
    }


?>