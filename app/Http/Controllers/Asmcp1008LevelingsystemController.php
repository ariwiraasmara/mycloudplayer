<?php
namespace App\Http\Controllers;

use App\Models\asmcp_1008_levelingsystem;
use App\Http\Requests\Storeasmcp_1008_levelingsystemRequest;
use App\Http\Requests\Updateasmcp_1008_levelingsystemRequest;

class Asmcp1008LevelingsystemController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $data = asmcp_1008_levelingsystem::orderBy('level', 'ASC')->get();
        return view('1.storage_levelup', ['title'=>'Level Up', 'footer'=>1, 'data'=>$data]);
    }

    public function getAll(asmcp_1008_levelingsystem $request) {
        $data = asmcp_1008_levelingsystem::orderBy('level', 'ASC')->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeasmcp_1008_levelingsystemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeasmcp_1008_levelingsystemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asmcp_1008_levelingsystem  $asmcp_1008_levelingsystem
     * @return \Illuminate\Http\Response
     */
    public function show(asmcp_1008_levelingsystem $asmcp_1008_levelingsystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asmcp_1008_levelingsystem  $asmcp_1008_levelingsystem
     * @return \Illuminate\Http\Response
     */
    public function edit(asmcp_1008_levelingsystem $asmcp_1008_levelingsystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateasmcp_1008_levelingsystemRequest  $request
     * @param  \App\Models\asmcp_1008_levelingsystem  $asmcp_1008_levelingsystem
     * @return \Illuminate\Http\Response
     */
    public function update(Updateasmcp_1008_levelingsystemRequest $request, asmcp_1008_levelingsystem $asmcp_1008_levelingsystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asmcp_1008_levelingsystem  $asmcp_1008_levelingsystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(asmcp_1008_levelingsystem $asmcp_1008_levelingsystem)
    {
        //
    }
}
