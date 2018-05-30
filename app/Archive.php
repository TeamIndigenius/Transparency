<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
      protected $fillable = [
    	'membership_id','doc_id','event_id','is_public'
    ];
}
