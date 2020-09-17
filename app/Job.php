<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Institution;

class Job extends Model
{
    
    public function getJobUser()
    {    
        return DB::table('jobs')
                ->select('jobs.id','jobs.name','jobs.description','jobs.level','jobs.su_id')
                ->join('role-user-job', function ($join) {
                    $join->on('jobs.id','=','role-user-job.job_id')
                         ->where('role-user-job.user_id','=', Auth::id());
                })
                ->get();                              
    }

    public function getJobInst()
    {
        return DB::table('jobs')
               ->join('struct_units',function($join){                    
                    $join->on('jobs.su_id', '=', 'struct_units.id')
                    ->where('struct_units.inst_id', '=', Institution::arrayInst());
                   
               })
               ->get();
    }
}
