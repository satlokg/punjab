<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\models\Village;
use App\models\Block;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $villages = Village::where('district_id',Auth::guard('district')->user()->id)->paginate(20); //dd($villages);
        return view('village.index',compact('villages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $blocks = Block::where('district_id',Auth::guard('district')->user()->id)->get();
        return view('village.create',compact('blocks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $village = new Village();
        $village->district_id = Auth::guard('district')->user()->id;
        $village->block_id = $request->block_id;
         $village->village_name = $request->village_name;
        $village->save();
        if($village){
                   $notification = array(
                        'message' => 'Village successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('district/village')->with($notification);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $village = Block::find($id); 
        $blocks = Block::where('district_id',Auth::guard('district')->user()->id)->get();
        return view('village.edit',compact('village','blocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
