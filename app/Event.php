<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;
use App\Membership;
use App\Document;
use DB;

class Event extends Model
{
	protected $table = 'events';

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

    public function scopeDocIsAvailable($query, $docId){
        return DB::table('documents')
            ->where('id', $docId)
            ->select('file_path')
            ->value($docId);
    }

    protected $fillable = [
    	 'title', 'description', 'venue', 'date', 'time', 'is_public'
    ];

}
