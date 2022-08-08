<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Response;
use Cookie;
use URL;

use App\Models\User;
use App\Models\asmcp_1001_userid;
use App\Models\asmcp_1002_userdir;
use App\Models\asmcp_1003_usersecurity;
use App\Models\asmcp_1004_userfolders;
use App\Models\asmcp_1005_userfiles;
use App\Models\asmcp_1006_userplaylists;
use App\Models\asmcp_1007_usersetting;

use App\MyLibs\myfunction;
use App\MyLibs\generateid;
use App\MyLibs\crud;

class PlayerController extends Controller {
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if( !isset($_COOKIE['id']) &&
            !isset($_COOKIE['id1001']) &&
            !isset($_COOKIE['username']) &&
            !isset($_COOKIE['email'])) {
                return view('2/player', ['title'=>'Dashboard', 'footer'=>0]);
        }
        return Redirect::to('/');
    }

    public function getFolders(string $id) {
        $folders = asmcp_1004_userfolders::where()->get();
        return $folders;
    }

    public function getFiles(string $id) {
        $files = asmcp_1005_userfiles::where()->get();
        return $files;
    }

    public function getPlaylist(string $id) {
        $playlist = asmcp_1006_userplaylists::where()->get();
        return $playlist;
    }

    public function getProfile(string $id) {

    }

    protected function getSetting(string $id) {

    }
}
