<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Block;
use App\models\Village;
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
                'password' => 'required|min:5|max:10',
                'contact' => 'required|min:10|max:10|unique:shgs',
                'block_id' => 'required',
                'village_id' => 'required',
            ],[
                'name.required' => ' The shg name field is required.',
                
            ]);
        
        if($r->id==''){
             $shg = new Shg();
        }
       else{
            $shg = Shg::find($r->id);
       }
        $shg->name = $r->name;
        $shg->contact = $r->contact;
        $shg->password = $r->password;
        $shg->district_id = Auth::guard('district')->user()->id;
        $shg->block_id = $r->block_id;
        $shg->village_id = $r->village_id;
        $shg->save();
            if($shg){
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
        $block=Block::where('district_id',Auth::guard('district')->user()->id)->get();
        return view('district.shgForm',compact('block'));
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

    public function shgEdit($r)
    {
        $shg = Shg::find($r);
        return view('district.shgForm',compact('shg'));
    }
}
