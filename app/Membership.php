<?php

namespace App;
//added by aa
use App\User;
use App\Position;
use App\Organization;
use App\Announcement;
use App\Comment;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = "memberships";
    
    public function members(){
		return $this->hasMany('App\User');
	}

	public function organizations(){
		return $this->belongsTo('App\Organization');
	}

	public function comments(){
		return $this->hasMany('App\Comment');
	}

	public function announcements(){
		return $this->hasMany('App\Announcement');
	}

	public function scopeGetUserID($query, $mem_id){
		return $query->select('user_id')->where('id', $mem_id)->get();
	}

	public function scopeGetOrgID($query, $mem_id){
		return $query->select('org_id')->where('id', $mem_id)->get();
	}
}