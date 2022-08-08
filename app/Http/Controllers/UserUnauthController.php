<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Redirector;
use Redirect;
use Response;
use Cookie;
use URL;

use App\Models\User;
use App\Http\Requests\Storeuser;
use App\Http\Requests\Updateuser;

use App\Models\asmcp_1000_user;
use App\Http\Requests\Storeasmcp_1000_userRequest;
use App\Http\Requests\Updateasmcp_1000_userRequest;

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

use App\MyLibs\myfunction;
use App\MyLibs\generateid;
use App\MyLibs\crud;

class UserUnauthController extends Controller {
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
        if( !isset($_COOKIE['id']) &&
            !isset($_COOKIE['id1001']) &&
            !isset($_COOKIE['username']) &&
            !isset($_COOKIE['email'])) {
                return view('1.login', ['title'=>'Your Very Own Music Player Cloud Based', 'footer'=>1]);
        }
        else Redirect::to('/player');
    }

    public function signin() {
        return view('1/register', ['title'=>'Sign In', 'footer'=>1]);
    }

    public function forgotpassword() {
        return view('1.forgot_password', ['title'=>'I\'ve Forgotten it!', 'footer'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCookie(Request $request) {
        $value = $request->cookie('coba');
        echo $value;
     }

    public function test(Request $request) {
        // Get the currently authenticated user...
        // $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        // $response = Http::post('https://jsonplaceholder.typicode.com/posts',
        //                     ['title' => 'Tsdsdsdm',
        //                      'body'  => 'ggg',]);

        // $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',
        //                     ['title' => 'This is test from ItSolutionStuff.com',
        //                      'body'  => 'This is test from ItSolutionStuff.com as body',]);

        // $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');
        //
        // dd($jsonData);

        //$response = Http::get(URL::to('/api/alluser'));
        //$jsonData = $response->json(); ("Hello World!")
        // echo myfunction::toMD5('abc123');
        // echo '<br/>';
        // echo myfunction::toMD5('aaa');
        // echo '<br/>';
        // echo myfunction::toMD5('ariwiraasmara');
        // echo '<br/>';
        echo Crypt::decryptString('eyJpdiI6InlncEdRa3Y4dE53SWRCY0lKeG1HUWc9PSIsInZhbHVlIjoiVlBnYzlLN3pjS2xNUk1aZnRtejFzZz09IiwibWFjIjoiMGEzMDNmNGI5OGY4NmVjMGM0NDg1OWM0Y2I2MWQ3YzJhY2M2YjQzYjQwMzUwZTU4YTQ5NWYzMTgyZjBhMDJlMiIsInRhZyI6IiJ9
        ');
        echo '<br/>';
        echo '<br/>';

        //$cookie = myfunction::getCookie('coba');
        // echo 'id cookie : '.myfunction::getCookie('id');
        // echo '<br/>';
        // echo 'id1001 cookie : '.myfunction::getCookie('id1001');
        // echo '<br/>';
        // echo 'username cookie : '.myfunction::getCookie('username');
        // echo '<br/>';
        // echo 'email cookie : '.myfunction::getCookie('email');
        // echo '<br/>';
        // echo 'id session : '.$request->session()->get('id');
        // echo '<br/>';
        // echo 'id1001 session : '.$request->session()->get('id1001');
        // echo '<br/>';
        // echo 'username session : '.$request->session()->get('username');
        // echo '<br/>';
        // echo 'email session : '.$request->session()->get('email');
        // echo '<br/>';
        return true;
    }

    public function loginprocess(Request $request) {
        $response   = Http::post(URL::to('/api/login'),
                            ['user' => $request->user,
                             'pass' => $request->pass]);
        $jdt        = $request->query('response', $response->json());
        $status     = $response->getStatusCode();
        if($status == 201) {
            // COOKIE & SESSION
            myfunction::setCookie($jdt['data']);
            foreach($jdt['data'] as $d => $v) {
                $request->session()->put($d, $v);
            }
            //echo $request->rememberme;
            //return response()->json(['msg' => 'Login Success!', 'success' => 1, 'status'=>$status, 'place'=>'userunauth', 'data'=>$jdt['data']], 201);
            return Redirect::to('/player')->with('msg','Login Success!');
        }
        //return response()->json(['msg' => 'Login Fail!', 'success' => 0, 'status'=>$status, 'place'=>'userunauth'], 500);
        //return $status;
        Redirect::to('/')->with('msg','Login Fail!');
    }

    public function saveuser(Request $request) {
        // $validate = $request->validate([
        //     'username'  => 'required|max:255|',
        //     'email'     => 'required|email',
        //     'password'  => 'required',
        // ]);

        //if($validate) {
            $response = Http::post(URL::to('/api/user/save'),
                        ['username' => $request->username,
                        'email'     => $request->email,
                        'password'  => $request->password]);
            $status = $response->getStatusCode();
            if($status == 201) return Redirect::to('/')->with('msg','Register Success!');
            else Redirect::to('/')->with('msg','Fail To Register!');
        //}
        //return Redirect::to('/')->with('msg','Fail To Register!');
    }

    public function forgotpasswordprocess(Request $request) {

    }

}
