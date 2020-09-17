<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\JobDescription;
use App;

class JobDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = new JobDescription();
        return view('JobDescription/index')->with([
            'jobDescriptions' => $documents->getDocuments(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = new App\Job();
        $StructUnit = new App\StructUnit();
        return view('JobDescription/Create')->with(
            [
                'jobs' => $jobs->getJobInst(),
                'structUnits' => $StructUnit->getStructUnitInst()
            ]
        );
    }
    /**
     * Added Document Job Description
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function addDocument(Request $request)
    {
        include '../../../vendor/phpoffice/phpword/bootstrap.php';
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
