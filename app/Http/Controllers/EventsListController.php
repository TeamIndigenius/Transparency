<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Membership;
use App\Organization;
use App\Event;
use App\Archive;
use Session;
use DB;
use Config;

class EventsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $org_id =  session()->get('org_id');
        $events = Event::orderBy('created_at', 'desc')->paginate(10);


        $officers = DB::table('positions')
            ->join('memberships', 'positions.id', '=','memberships.position_id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->select('positions.position', 'users.first_name', 'users.last_name')
            ->where('memberships.org_id', $org_id)
            ->orderBy('positions.id', 'ASC')
            ->get();


        $id = Auth::user()->id;
        $membership = DB::table('memberships')->select('id')->where('user_id', $id)->get();
        // echo "<pre>";
        // print_r($membership);

        return view('events.eventlist', compact('events','membership', 'officers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->venue = $request->venue;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->is_public = 1;
        $event->save();
        $event->id;

        $archive = new Archive();
        $archive->membership_id = $request->membership_id;
        $archive->event_id = $event->id;
        $archive->doc_id = 0;//update id later on
        $archive->is_public = 1;
        $archive->save();

        
        return $this->index();
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
        $event = Event::findOrFail($id);
        return view('events.eventlist', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);// getting the data from the database using post id
        return view('events.eventlist', compact('event'));
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
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return view('events.eventlist', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('/eventlist/');
    }

    public function setOrgID($id){
        Session::put('org_id', $id);
        return redirect('/eventlist/');
    }
}
