<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Membership;
use App\Organization;
use App\Document;
use App\IGP;
use Image;

class IGPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $igps = IGP::orderBy('created_at', 'desc')->paginate(10);
        return view('igps.igplist', compact('igps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //IGP::create($request->all());

        $igp = new IGP;
        $doc = new Document; 
        $igp->title = $request->item_name;
        $igp->content = Input::get('description', false);
        $igp->price = $request->price;
        $igp->is_public = 1;
        $doc->is_public = 1;
        $doc->file_type = 'image';
        $doc->file_name = $request->file('item_image')->getClientOriginalName();
        $doc->file_path = "/uploads/media/" . $request->file('item_image')->getClientOriginalName();
        $igp->membership_id = Auth::user()->id;

        $image = $request->file('item_image')->getClientOriginalName();
        Image::make($request->file('item_image')->getRealPath())->resize(400, 400)->save(public_path('/uploads/media/'.$image));

        $doc->save();
        $igp->doc_id = $doc->id;    
        $igp->save();


        return redirect('/igps');
        // the importance of 'redirect': hah! by:aa
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $igps = IGP::findOrFail($id);
        return view('igps.igplist', compact('igps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $igps = IGP::findOrFail($id);// getting the data from the database using post id
        return view('igps.igplist', compact('igps'));
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
        $igps = IGP::findOrFail($id);
        $igps->update($request->all());
        return view('igps.igplist', compact('igps'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $igps = IGP::findOrFail($id);
        $igps->delete();
        return view('igps.igplist', compact('igps'));
    }
}
