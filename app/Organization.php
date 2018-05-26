<?php
use Illuminate\Support\Facades\DB;
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Membership;
use DB;

class Organization extends Model
{
    protected $table = "organizations";

// the ff function aren't used yet
    public function scopeGetExecom($query, $orgId){
    	return DB::table('organizations')
    		->join('memberships', 'organizations.id','=', 'memberships.org_id')
    		->join('users', 'memberships.user_id','=', 'users.id')
    		->where('organizations.id', $orgId)
    		->where('memberships.position_id', not(10)) //10 is not execom
    		->select('users.first_name', 'users.last_name')
    		->value('first_name', 'last_name');
    }

    public function scopeGetPosition($query, $memId){
    	return DB::table('positions')
    		->join('memberships', 'positions.id', '=','memberships.position_id')
    		->where('memberships.id', $memId)
    		->select('positions.position')
    		->value('position');
    }

    public function scopeIsExecom($query, $userId){
    	return DB::table('positions')
    		->join('memberships', 'positions.id', '=','memberships.position_id')
    		->join('users', 'memberships.user_id', '=', 'users.id')
    		->where('users.id', $userId)
    		->select('positions.is_execom')
    		->value('is_execom');
    }
}
