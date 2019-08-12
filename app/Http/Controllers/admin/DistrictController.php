<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\District;
use App\models\Shg;
use Auth;

class DistrictController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:district');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('district/dashboard');
    }

    public function shg()
    {
        $shgs=Shg::select('shgs.*','villages.village_name','districts.name as dname','blocks.block_name')
        ->leftjoin('villages','shgs.village_id','=','villages.id')
        ->leftjoin('districts','shgs.district_id','=','districts.id')
        ->leftjoin('blocks','shgs.block_id','=','blocks.id')
        ->where('shgs.district_id', Auth::guard('district')->user()->id)
        ->paginate(10); //dd($shgs);
        return view('district.shg',compact('shgs'));
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
                return redirect('district/shg')->with($notification);
            }
            $notification = array(
                        'message' => 'Shg not Aded', 
                        'alert-type' => 'danger'
                    );
         return back()->with($notification);
        }
        return view('district.shgForm');
    }
}
