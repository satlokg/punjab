<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\District;
use App\models\Block;
use App\models\Village;
use App\models\Shg;
use App\models\SubCategory;
use App\models\Order;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function category()
    {
        $cateories=Category::paginate(25);
        return view('admin.category',compact('cateories'));
    }


    public function categoryAdd(Request $r)
    { 
        if(!empty($r->post())){
        $this->validate($r,[
                'name' => 'required|min:5|max:35',
                'profile_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'name.required' => ' The category name field is required.',
                
            ]);
        $category = new Category();
        if($r->file()){
             $file = $r->file('pic');
              //Move Uploaded File
              $destinationPath = public_path('upload'); 
              $imageName = time().'.'.$file->getClientOriginalExtension();
              $file->move($destinationPath,$imageName);
              $category->pic = $imageName;
        } 
        $category->name = $r->name;
        $category->desc = $r->desc;
        $category->save();
            if($category){
                   $notification = array(
                        'message' => 'Category successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('admin/category')->with($notification);
            }
            $notification = array(
                        'message' => 'Category not Aded', 
                        'alert-type' => 'danger'
                    );
         return back()->with($notification);
        }
        return view('admin.categoryForm');
    }

    public function shg()
    {
        $shgs=Shg::select('shgs.*','villages.village_name','districts.name as dname','blocks.block_name')
        ->leftjoin('villages','shgs.village_id','=','villages.id')
        ->leftjoin('districts','shgs.district_id','=','districts.id')
        ->leftjoin('blocks','shgs.block_id','=','blocks.id')
        ->orderBy('id','desc')
        ->paginate(25); //dd($shgs);
        
        return view('admin.shg',compact('shgs'));
    }
    public function shgList($district_id)
    {
        $shgs=Shg::select('shgs.*','villages.village_name','districts.name as dname','blocks.block_name')
        ->leftjoin('villages','shgs.village_id','=','villages.id')
        ->leftjoin('districts','shgs.district_id','=','districts.id')
        ->leftjoin('blocks','shgs.block_id','=','blocks.id')
        ->where('shgs.district_id',$district_id)
        ->orderBy('id','desc')
        ->paginate(25); //dd($shgs);
        
        return view('admin.shg',compact('shgs'));
    }

    public function shgAdd(Request $r)
    { 
        if(!empty($r->post())){
        $this->validate($r,[
                'name' => 'required|min:5|max:35',
                'password' => 'required|min:5|max:10',
                'contact' => 'required|min:10|max:10|unique:shgs',
                'district_id' => 'required',
                'block_id' => 'required',
                'village_id' => 'required',
            ],[
                'name.required' => ' The shg name field is required.',
                
            ]);
        $shg = new Shg();
        $shg->name = $r->name;
        $shg->contact = $r->contact;
        $shg->password = $r->password;
        $shg->district_id = $r->district_id;
        $shg->block_id = $r->block_id;
        $shg->village_id = $r->village_id;
        $shg->save();
            if($shg){
                   $notification = array(
                        'message' => 'Shg successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('admin/shg')->with($notification);
            }
            $notification = array(
                        'message' => 'Shg not Aded', 
                        'alert-type' => 'danger'
                    );
         return back()->with($notification);
        }
        $dist=District::all();
        return view('admin.shgForm',compact('dist'));
    }

    public function district()
    {
        $districts=District::paginate(25);
        return view('admin.district',compact('districts'));
    }


    public function districtAdd(Request $r)
    { 
        if(!empty($r->post())){
        $this->validate($r,[
                'name' => 'required|min:5|max:35',
            ],[
                'name.required' => ' The District name field is required.',
                
            ]);
        $district = new District();
        $district->name = $r->name;
        $district->password = md5($r->password);
        $district->save();
            if($district){
                   $notification = array(
                        'message' => 'Districts successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('admin/district')->with($notification);
            }
            $notification = array(
                        'message' => 'Districts not Aded', 
                        'alert-type' => 'danger'
                    );
         return back()->with($notification);
        }
        return view('admin.districtForm');
    }

    public function subcategory($cat)
    {
        $subcats=Category::where('id',$cat)->with('sub_categories')->first(); //dd($subcats->sub_categories);
        return view('admin.sub-category',compact('subcats'));
    }

    public function subcategoryAdd(Request $r,$cat=null)
    {
        if(!empty($r->post())){
        $this->validate($r,[
                'name' => 'required|min:5|max:35',
            ],[
                'name.required' => ' The Sub category name field is required.',
                
            ]);
        $subcategory = new SubCategory();
        if($r->file()){
             $file = $r->file('pic');
              //Move Uploaded File
              $destinationPath = public_path('upload'); 
              $imageName = time().'.'.$file->getClientOriginalExtension();
              $file->move($destinationPath,$imageName);
              $subcategory->pic = $imageName;
        } 
        $subcategory = new SubCategory();
        $subcategory->category_id = $r->category_id;
        $subcategory->name = $r->name;
        $subcategory->desc = $r->desc;
        $subcategory->save();
            if($subcategory){
                   $notification = array(
                        'message' => 'Sub Category successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('admin/subcategory/'.$r->category_id)->with($notification);
            }
            $notification = array(
                        'message' => 'Sub Category not Aded', 
                        'alert-type' => 'danger'
                    );
         return back()->with($notification);
        }
        $cat=Category::where('id',$cat)->with('sub_categories')->first();
        return view('admin.subcategoryForm',compact('cat'));
    }


     public function ajax($action=null,$stat=null){ //dd($action);
        switch($action){
            case "getBlock": 
               $item=Block::where('district_id',$stat)->get();
                   $html= '<option value="">Select Block</option>';
                    foreach($item as $items){
                        $html.= '<option value='.$items->id.'>'.$items->block_name.'</option>';
                    }

              echo $html;
            break;

            case "getVill": 
               $item=Village::where('block_id',$stat)->get();
                   $html= '<option value="">Select Village</option>';
                    foreach($item as $items){
                        $html.= '<option value='.$items->id.'>'.$items->village_name.'</option>';
                    }

              echo $html;
            break;
            
        }

    }

    public function userList(){
        $users=User::paginate(25);
        return view('admin.user_list',compact('users'));
    }

    public function userOrders($user_id){
        $orders=Order::where('user_id',$user_id)->paginate(10);
        return view('admin.orders_list',compact('orders'));
    }
}
