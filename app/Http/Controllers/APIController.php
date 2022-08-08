<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use App\Http\Requests\Storeuser;
use App\Http\Requests\Updateuser;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

use App\Models\asmcp_1000_user;
use App\Http\Requests\Storeasmcp_1000_userRequest;
use App\Http\Requests\Updateasmcp_1000_userRequest;
use App\Http\Resources\asmcp_1000_userResource;
use App\Http\Resources\asmcp_1000_userCollection;

use App\Models\asmcp_1001_userid;
use App\Http\Requests\Storeasmcp_1001_useridRequest;
use App\Http\Requests\Updateasmcp_1001_useridRequest;
use App\Http\Resources\asmcp_1001_useridResource;
use App\Http\Resources\asmcp_1001_useridCollection;

use App\Models\asmcp_1002_userdir;
use App\Http\Requests\Storeasmcp_1002_userdirRequest;
use App\Http\Requests\Updateasmcp_1002_userdirRequest;
use App\Http\Resources\asmcp_1002_userdirResource;
use App\Http\Resources\asmcp_1002_userdirCollection;

use App\Models\asmcp_1003_usersecurity;
use App\Http\Requests\Storeasmcp_1003_usersecurityRequest;
use App\Http\Requests\Updateasmcp_1003_usersecurityRequest;
use App\Http\Resources\asmcp_1003_usersecurityResource;
use App\Http\Resources\asmcp_1003_usersecurityCollection;

use App\Models\asmcp_1004_userfolders;
use App\Http\Requests\Storeasmcp_1004_userfoldersRequest;
use App\Http\Requests\Updateasmcp_1004_userfoldersRequest;
use App\Http\Resources\asmcp_1004_userfoldersResource;
use App\Http\Resources\asmcp_1004_userfoldersCollection;

use App\Models\asmcp_1005_userplaylists;
use App\Http\Requests\Storeasmcp_1005_userplaylistsRequest;
use App\Http\Requests\Updateasmcp_1005_userplaylistsRequest;
use App\Http\Resources\asmcp_1005_userplaylistsResource;
use App\Http\Resources\asmcp_1005_userplaylistsCollection;

use App\Models\asmcp_1006_userfiles;
use App\Http\Requests\Storeasmcp_1006_userfilesRequest;
use App\Http\Requests\Updateasmcp_1006_userfilesRequest;
use App\Http\Resources\asmcp_1006_userfilesResource;
use App\Http\Resources\asmcp_1006_userfilesCollection;

use App\Models\asmcp_1007_usersetting;
use App\Http\Requests\Storeasmcp_1007_usersettingRequest;
use App\Http\Requests\Updateasmcp_1007_usersettingRequest;
use App\Http\Resources\asmcp_1007_usersettingResource;
use App\Http\Resources\asmcp_1007_usersettingCollection;

use App\Models\asmcp_1009_userstoragelevel;
use App\Http\Requests\Storeasmcp_1009_userstoragelevelRequest;
use App\Http\Requests\Updateasmcp_1009_userstoragelevelRequest;
use App\Http\Resources\asmcp_1009_userstoragelevelResource;
use App\Http\Resources\asmcp_1009_userstoragelevelCollection;

use App\MyLibs\myfunction;
use App\MyLibs\generateid;
use App\MyLibs\crud;

class APIController extends Controller {
    //

    public static $fun;
    public function __construct() {
        self::$fun = new myfunction();
    }

    public function readAll1001() {
        $data = asmcp_1001_userid::with(['user'])->get();
        //return response()->json($data, 200);
        return new asmcp_1001_useridCollection($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function read1001($id) {
        $where = array("id"=> $id);
        $data  = asmcp_1001_userid::where($where)->get();
        //return response()->json($data, 200);
        return new asmcp_1001_useridCollection($data);
    }

    public function getAllUser() {
        $p1000 = asmcp_1000_user::all();
        $data = array('data' => $p1000);
        return $data;
    }

    public function getUser($id) {
        $where = array('remember_token'=>$id);
        if(asmcp_1000_user::where($where)->count() == 1) {
            $data = asmcp_1000_user::where($where)->get();
            //return new UserCollection($data);
            return new asmcp_1000_userResource($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request) {
        $user = asmcp_1000_user::where('username', $request->user)->first();
        if(!$user) {
            return response()->json(['msg' => 'Login Fail!',
                                    'layer' => 1,
                                    'success' => 0,
                                    'place'=>'api'], 500);
        }
        if( !($request->pass && myfunction::decrypt($user->password)) ) {
            return response()->json(['msg' => 'Login Fail!',
                                    'layer' => 2,
                                    'success' => 0,
                                    'place'=>'api',
                                    'pass_crypted'=>$user->password,
                                    'pass_decrypted'=>myfunction::decrypt($user->password)], 500);
        }

        $user = asmcp_1000_user::join('asmcp_1001_userid', 'asmcp_1000_user.id', '=', 'asmcp_1001_userid.id')
                                ->where('username', '=', $request->user)
                                ->select('asmcp_1000_user.*', 'asmcp_1001_userid.id_1001')
                                ->get();

        $data = array("id" => $user[0]['id'],
                    "id1001" => $user[0]['id_1001'],
                    "username" => $user[0]['username'],
                    "email" => $user[0]['email'],
                );

        return response()->json(['msg' => 'Login Success', 'success' => 1, 'data'=>$data], 201);
    }

    public function saveuser(Request $request) {
        // $validate = $request->validate([
        //     'username'  => 'required|max:255|',
        //     'email'     => 'required|email',
        //     'password'  => 'required',
        // ]);

        // User Procedure
        $puser = array("id"         => $id = generateid::getID(),
                        "username"  => $request->username,
                        "email"     => $request->email,
                        "password"  => $pass = myfunction::encrypt($request->password),
                        "token"     => $remembertoken = myfunction::random('combwisp', 10));
        $ruser = crud::puser(1, $puser);
        // $rasu++;
        // User::create($puser);

        // 1000 Procedure
        $p1000 = array("id"         => $id,
                        "username"  => $request->username,
                        "email"     => $request->email,
                        "password"  => $pass,
                        "token"     => $remembertoken);
        $r1000 = crud::p1000(1, $p1000);

        // 1001 Procedure
        $id1001 = generateid::getID1001();

        $p1001 = array("id1001" => $id1001 = generateid::getID1001(),
                        "id"    => $id,);
        $r1001 = crud::p1001(1, $p1001);

        // 1002 Procedure
        $id1002 = generateid::getID1002();
        $userpath = generateid::getUserPath();

        $p1002 = array("id1002"   => $id1002,
                        "id1001"  => $id1001,
                        "rootdir" => $userpath,);
        $r1002 = crud::p1002(1, $p1002);

        // 1003 Procedure
        $id1003 = generateid::getID1003();

        $p1003 = array("id1003"  => $id1003,
                        "id1001" => $id1001,);
        $r1003 = crud::p1003(1, $p1003);

        // 1004 Procedure
        $id1004 = generateid::getID1004($id1001);
        $p1004 = array("id1004"      => $id1004,
                        "id1001"     => $id1001,
                        "foldername" => 'My Music',
                        "ket"        => 'Folder Musikku',);
        $r1004 = crud::p1004(1, $p1004);

        // 1005 Procedure
        $id1005 = generateid::getID1005($id1001);
        $p1005 = array("id1005"    => $id1005,
                        "id1001"   => $id1001,
                        "playlist" => 'default',);
        $r1005 = crud::p1005(1, $p1005);

        // 1007 Procedure
        $id1007 = generateid::getID1007();
        $p1007 = array("id1007"    => $id1007,
                        "id1001"   => $id1001,
                        "theme"    => '#fff',
                        "text"     => '#000',);
        $r1007 = crud::p1007(1, $p1007);

        // 1009 Procedure
        $id1009 = generateid::getID1009();
        $p1009 = array("id1009"  => $id1009,
                        "id1001" => $id1001,
                        "level"   => 1,);
        $r1009 = crud::p1009(1, $p1009);

        return response()->json(['msg' => 'Register Success', 'success' => 1], 201);
    }

    public function update_user() {

    }

    public function updatesecurity() {

    }

    public function getDir() {

    }

    public function save_folder() {

    }

    public function update_folder() {

    }

    public function delete_folder() {

    }

    public function save_file() {

    }

    public function update_file() {

    }

    public function delete_file() {

    }

    public function getPlaylist() {

    }

    public function save_playlist() {

    }

    public function update_playlist() {

    }

    public function delete_playlist() {

    }

    public function update_user_setting() {

    }

    public function update_user_storage_level() {

    }

}
