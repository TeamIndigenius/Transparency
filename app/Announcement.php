<?php

namespace App;
use App\User;
use App\Comment;
use Auth;
use App\Membership;
use App\Document;
use DB;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
	// App\Membership ?
    public function user(){
		return $this->belongsTo('App\User');
	}

	public function member(){
		return $this->belongsTo('App\Membership');
	}
	
	public function comments(){
		return $this->hasMany('App\Comment');
	}

	public function scopeGetCommentDetails($query, $a_id, $c_id){

	}

	public function scopeGetPosition($query, $memId){
    	return DB::table('positions')
    		->join('memberships', 'positions.id', '=','memberships.position_id')
    		->where('memberships.id', $memId)
    		->select('positions.position')
    		->value('position');
    }

    public function scopeGetUserId($query, $memId){
    	return DB::table('memberships')
    		->where('memberships.id', $memId)
    		->select('memberships.user_id')
    		->value('user_id');
    }
	
    protected $fillable = [
    	'membership_id', 'content', 'is_public'
    ];
}
