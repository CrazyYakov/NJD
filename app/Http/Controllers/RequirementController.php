<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
class RequirementController extends Controller
{
    public function index()
    {        
        $requirement = new Requirement();        
        return view('Requirement/index',[
            'requirements'=> $requirement->getRequirementInst(),
        ]);
    }

    public function create()
    {
        $requirement = new Requirement();
        return view('Requirement/create',[
            'requirements'=> $requirement->getRequirementInst(),            
        ]);
    }

    public function store(Request $request)
    {
        requirement::create([
            'name' => $request['name'],
            'description'=>$request['text'],
            'parent_id'=>$request['typeReq'],
        ]);

        return redirect()->route('requirement.index');
    }

}
