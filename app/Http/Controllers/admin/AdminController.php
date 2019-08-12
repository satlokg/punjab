<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\District;
use App\models\Shg;

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
        $cateories=Category::paginate(10);
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
        $shgs=Shg::paginate(10);
        return view('admin.shg',compact('shgs'));
    }


    public function shgAdd(Request $r)
    { 
        if(!empty($r->post())){
        $this->validate($r,[
                'name' => 'required|min:5|max:35',
            ],[
                'name.required' => ' The category name field is required.',
                
            ]);
        $category = new Shg();
        $category->name = $r->name;
        $category->desc = $r->desc;
        $category->save();
            if($category){
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
        return view('admin.shgForm');
    }

    public function district()
    {
        $districts=District::paginate(10);
        return view('admin.district',compact('districts'));
    }


    public function districtAdd(Request $r)
    { 
        if(!empty($r->post())){
        $this->validate($r,[
                'name' => 'required|min:5|max:35',
            ],[
                'name.required' => ' The category name field is required.',
                
            ]);
        $category = new Category();
        $category->name = $r->name;
        $category->desc = $r->desc;
        $category->save();
            if($category){
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
}
