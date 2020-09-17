<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\StructUnit;
class Institution extends Model
{
    /**
     * return array the user's Institute
     * 
     */
    public function getInstitutionUser()
    {
        $structUnit = new StructUnit();        
        $structUnit = json_decode($structUnit->getStructUnitUser(),true);        
        return DB::table('institutions')
                ->where('id', $structUnit[0]['inst_id'])
                ->get();
    }

    public static function arrayInst()
    {
        $institution = new Institution();
        $institution = json_decode($institution->getInstitutionUser(), true);        
        return $institution[0]['id'];
    }
}
