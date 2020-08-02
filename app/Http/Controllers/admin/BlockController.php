<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\models\Block;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::where('district_id',Auth::guard('district')->user()->id)->paginate(20); //dd($blocks);
        return view('block.index',compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('block.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $block = new Block();
        $block->district_id = Auth::guard('district')->user()->id;
        $block->block_name = $request->block_name;
        $block->save();
        if($block){
                   $notification = array(
                        'message' => 'Block successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('district/block')->with($notification);
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
        $block = Block::find($id); 
        return view('block.edit',compact('block'));
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
        $block = Block::find($id); dd($id);
        $block->district_id = Auth::guard('district')->user()->id;
        $block->block_name = $request->block_name;
        $block->save();
        if($block){
                   $notification = array(
                        'message' => 'Block successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('district/block')->with($notification);
            }
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
