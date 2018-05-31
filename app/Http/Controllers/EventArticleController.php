<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class EventArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $org_id = 1;
        $event_id = 1;

        $documents = DB::table('archives')
            ->join('documents', 'archives.doc_id', '=','documents.id')
            ->join('events', 'archives.event_id', '=', 'events.id')
            ->join('memberships', 'archives.membership_id', '=','memberships.id')
            ->where('memberships.org_id', $org_id)
            ->select('documents.file_path')
            ->value('documents.file_path');

        // echo $documents;
        // print_r($documents); 
        return view('events.eventArticle', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $file = $request->file_name;
        $extension = $file->getClientOriginalExtension();
        $doc = new Document; 

        if ($extension=='image/jpeg'){
            $doc->file_type = 'image';
            $doc->file_path = "/uploads/media/" . $request->file('file_name')->getClientOriginalName();
        }
        else{
             $doc->file_type = 'pdf';
             $doc->file_path = "/uploads/docs/" . $request->file('file_name')->getClientOriginalName();
        }

        $doc->file_name = $request->file('file_name')->getClientOriginalName();
        $doc->is_public = 1;


        $doc->save();

        return redirect('/eventArticle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
