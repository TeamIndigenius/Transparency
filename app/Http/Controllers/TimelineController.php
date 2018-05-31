<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Membership;
use App\Organization;
use App\Announcement;
use App\Comment;
use Session;
use DB;
use Config;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $org_id =  session()->get('org_id');
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(10);
        // $isExecom = DB::table('positions')
        //     ->join('memberships', 'positions.id', '=','memberships.position_id')
        //     ->join('users', 'memberships.user_id', '=', 'users.id')
        //     ->where('users.id', Auth::user()->id)
        //     ->select('positions.is_execom')
        //     ->value('is_execom');

        $officers = DB::table('positions')
            ->join('memberships', 'positions.id', '=','memberships.position_id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->select('positions.position', 'users.first_name', 'users.last_name')
            ->where('memberships.org_id', $org_id)
            ->orderBy('positions.id', 'ASC')
            ->get();
        
        foreach ($announcements as $item) {
            $mem_id = $item->membership_id;
            $id = Membership::getUserId($mem_id);
            $username = User::getUsername($id[0]->user_id);
            $item->username = $username[0]->first_name;    
        }

        // echo "<pre>";
        // print_r($comment_details);

        // for adding announcement
        $id = Auth::user()->id;
        $membership = Membership::whereUser_id($id)->first();

        return view('timeline', compact('announcements', 'membership', 'isExecom', 'officers'));
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
        Announcement::create($request->all());
        return redirect('timeline');
        // redirect: para hindi ma-resubmit ang form
        // return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcements = Announcement::findOrFail($id);
        return view('timeline', compact('announcements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);// getting the data from the database using post id
        // return view('timeline', compact('announcement'));
        return $this->index();

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
        $announcement = Announcement::findOrFail($id);
        $announcement->update($request->all());
        return redirect('/timeline/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();
        return redirect('/timeline/');
    }

    public function setOrgID($id){
        Session::put('org_id', $id);
        return redirect('/timeline/');
    }
}
