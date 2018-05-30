<?php

namespace App;
use DB;


use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $fillable = ['file_name', 'file_path', 'file_type', 'is_public', 'created_at', 'updated_at'];
}
