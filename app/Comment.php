<?php

namespace App;
use App\User;
use App\Announcement;
use Auth;
use App\Membership;
use DB;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
		return $this->belongsTo('App\User');
	}

	public function member(){
		return $this->belongsTo('App\Membership');
	}

	public function announcement(){
		return $this->belongsTo('App\Annoucement');
	}

	public function scopeGetCommentDetails($query, $ann_id){
		return $query->where('announcement_id', $ann_id)->get();
	}

	public function scopeGetUserName($query, $m_id){
		return DB::table('memberships')
		->join('users', 'memberships.user_id','=', 'users.id')
		->where('memberships.id', $m_id)
		->select('users.first_name')
		->value('first_name');
	}

	public function scopeGetOrgName($query, $mem_id){
    	return DB::table('memberships')
    		->join('organizations','memberships.org_id','=','organizations.id')
    		->where('memberships.id', $mem_id)
    		->select('organizations.org_name')
    		->value('org_name');
    }
    
    public function scopeGetUserId($query, $memId){
    	return DB::table('memberships')
    		->where('memberships.id', $memId)
    		->select('memberships.user_id')
    		->value('user_id');
    }
	
    protected $fillable = [
    	'membership_id', 'announcement_id','content', 'is_public'
    ];
}
