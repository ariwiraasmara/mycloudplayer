<?php
namespace App\Http\Controllers;

use App\Models\asmcp_1001_userid;
use App\Http\Requests\Storeasmcp_1001_useridRequest;
use App\Http\Requests\Updateasmcp_1001_useridRequest;

use App\Models\asmcp_1002_userdir;
use App\Http\Requests\Storeasmcp_1002_userdirRequest;
use App\Http\Requests\Updateasmcp_1002_userdirRequest;

use App\Models\asmcp_1003_usersecurity;
use App\Http\Requests\Storeasmcp_1003_usersecurityRequest;
use App\Http\Requests\Updateasmcp_1003_usersecurityRequest;

use App\Models\asmcp_1004_userfolders;
use App\Http\Requests\Storeasmcp_1004_userfoldersRequest;
use App\Http\Requests\Updateasmcp_1004_userfoldersRequest;

use App\Models\asmcp_1005_userfiles;
use App\Http\Requests\Storeasmcp_1005_userfilesRequest;
use App\Http\Requests\Updateasmcp_1005_userfilesRequest;

use App\Models\asmcp_1006_userplaylists;
use App\Http\Requests\Storeasmcp_1006_userplaylistsRequest;
use App\Http\Requests\Updateasmcp_1006_userplaylistsRequest;

use App\Models\asmcp_1007_usersetting;
use App\Http\Requests\Storeasmcp_1007_usersettingRequest;
use App\Http\Requests\Updateasmcp_1007_usersettingRequest;


class Asmcp1001UseridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // Halaman untuk menampilkan formulir anggota baru
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeasmcp_1001_useridRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeasmcp_1001_useridRequest $request) {
        // Dimana sistem akan memproses keanggotaan baru

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asmcp_1001_userid  $asmcp_1001_userid
     * @return \Illuminate\Http\Response
     */
    public function show(asmcp_1001_userid $asmcp_1001_userid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asmcp_1001_userid  $asmcp_1001_userid
     * @return \Illuminate\Http\Response
     */
    public function edit(asmcp_1001_userid $asmcp_1001_userid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateasmcp_1001_useridRequest  $request
     * @param  \App\Models\asmcp_1001_userid  $asmcp_1001_userid
     * @return \Illuminate\Http\Response
     */
    public function update(Updateasmcp_1001_useridRequest $request, asmcp_1001_userid $asmcp_1001_userid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asmcp_1001_userid  $asmcp_1001_userid
     * @return \Illuminate\Http\Response
     */
    public function destroy(asmcp_1001_userid $asmcp_1001_userid)
    {
        //
    }
}
