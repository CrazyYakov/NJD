<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Institution;
use Illuminate\Support\Facades\DB;

class Requirement extends Model
{
    protected $fillable = ['name','description','parent_id','user_id'];

    public function getRequirementInst()
    {
        return DB::table('requirements')
        ->select(
            'requirements.id as id',
            'requirements.name as name',
            'requirements.parent_id as type',
            'users.name as user'
            )
        ->join('role-user-job','role-user-job.id', '=', 'requirements.user_id')
        ->join('jobs', 'jobs.id','=', 'role-user-job.job_id')
        ->join('struct_units','struct_units.id','=','jobs.su_id')
        ->join('Institutions',function($join){            
            $join->on('institutions.id','=','struct_units.inst_id')
                ->where('Institutions.id', '=', Institution::arrayInst());
        })
        ->join('users', 'role-user-job.user_id', '=', 'users.id')
        ->get();
    }
    
}
