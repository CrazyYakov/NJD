<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Institution;

class JobDescription extends Model
{
    protected $fillable  = ['name', 'slug','user_id','immediate_manager_id','approved_id','senior_manager_id','adoption_at','experience','job_id'];

    public function getDocuments()
    {        
        
        return DB::table('Job_Descriptions')
        ->select(            
             'Job_Descriptions.id as id',
             'Job_Descriptions.name as name',
             'Jobs.name as job',
             'users.name as user',
             'Job_Descriptions.created_at as created_at'
        )
        ->join('jobs', 'jobs.id','=', 'Job_Descriptions.job_id')
        ->join('struct_units','struct_units.id','=','jobs.su_id')
        ->join('Institutions',function($join){            
            $join->on('institutions.id','=','struct_units.inst_id')
                ->where('Institutions.id', '=', Institution::arrayInst());
        })                
        ->join('role-user-job','role-user-job.id','=','Job_Descriptions.user_id')
        ->join('users', 'role-user-job.user_id', '=', 'users.id')
        ->get();
    }
}
