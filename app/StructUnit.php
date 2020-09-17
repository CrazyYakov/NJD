<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Job;
class StructUnit extends Model
{
    /**
     * return the user's Struct Unit  
     * 
     * @return array
     */
    public function getStructUnitUser()
    {
        $job = new Job();
        $job = json_decode($job->getJobUser(),true);        
        return DB::table('struct_units')
                 ->where('id', $job[0]['su_id'])
                 ->get();                            
    }
    public function getStructUnitInst()
    {     
        return DB::table('struct_units')
                    ->where('inst_id', Institution::arrayInst());
    }
}
