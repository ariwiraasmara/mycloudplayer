<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use App\Http\Requests\Storeuser;
use App\Http\Requests\Updateuser;

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

use App\Models\asmcp_1005_userplaylists;
use App\Http\Requests\Storeasmcp_1005_userplaylistsRequest;
use App\Http\Requests\Updateasmcp_1005_userplaylistsRequest;

use App\Models\asmcp_1006_userfiles;
use App\Http\Requests\Storeasmcp_1006_userfilesRequest;
use App\Http\Requests\Updateasmcp_1006_userfilesRequest;

use App\Models\asmcp_1007_usersetting;
use App\Http\Requests\Storeasmcp_1007_usersettingRequest;
use App\Http\Requests\Updateasmcp_1007_usersettingRequest;

use App\MyLibs\generateid;
use App\MyLibs\crud;

class UserController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        return view('1/register', ['title'=>'Sign In', 'footer'=>1]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        //
        return view('profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser $request, User $user) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        //
    }

}
