<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;
use App\Membership;
use App\Document;
use DB;


class IGP extends Model
{
	protected $table = 'igps';

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function member(){
		return $this->belongsTo('App\Membership');
	}
    
    public function scopeGetImage($query, $docId){
    	return DB::table('documents')
    		->where('id', $docId)
    		->select('file_path')
    		->value('file_path');
    }

    public function scopeGetUserId($query, $memId){
        return DB::table('memberships')
            ->where('memberships.id', $memId)
            ->select('memberships.user_id')
            ->value('user_id');
    }

    protected $fillable = [
    	'doc_id', 'membership_id', 'title', 'content', 'is_public'
    ];

}
