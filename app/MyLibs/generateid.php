<?php
namespace App\Mylibs;

use App\Models\asmcp_1001_userid;
use App\Models\asmcp_1002_userdir;
use App\Models\asmcp_1003_usersecurity;
use App\Models\asmcp_1004_userfolders;
use App\Models\asmcp_1006_userfiles;
use App\Models\asmcp_1005_userplaylists;
use App\Models\asmcp_1007_usersetting;

use App\MyLibs\myfunction;

class generateid {

    protected static int $rucid;
    protected static string $pubuserid;

    protected static string $id1001;
    protected static string $id1002;
    protected static string $id1003;
    protected static string $id1004;
    protected static string $id1005;
    protected static string $id1006;
    protected static string $id1007;

    public function __construct(int $stats = 0) {
        self::$id1001 = '__null__';
    }


    public static function getID() {
        $table = \DB::select("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'mycloudplayer' AND TABLE_NAME = 'users'");
        if (!empty($table)) {
            return $table[0]->AUTO_INCREMENT;
        }
    }

    protected static function setRUCID(int $val = null) {
        self::$rucid = $val;
    }

    protected static function getRUCID() {
        return self::$rucid;
    }

    protected static function setPUBUSERID(string $str = null) {
        self::$pubuserid = $str;
    }

    protected static function getPUBUSERID() {
        return self::$pubuserid;
    }

    public static function getID1001() {
        $count = asmcp_1001_userid::count();
        if($count > 0) {
            //echo 'data 1001 : ';
            $data = asmcp_1001_userid::orderByRaw('SUBSTRING_INDEX(id_1001, 10, 4) DESC')->limit(1)->get();
            self::setRUCID((int)substr($data[0]['id_1001'], 10, 1) + 1);
            self::setPUBUSERID(myfunction::random('char', 3).self::$rucid.myfunction::random('numb', 4));
            //return $pubuserid;
        }
        else {
            //echo 'data 1001 kosong, ';
            self::setPUBUSERID(myfunction::random('char', 3).'1'.myfunction::random('numb', 4));
        }
        self::setID1001('MCP$ID#'.self::getPUBUSERID());
        return 'MCP$ID#'.self::getPUBUSERID();
    }

    protected static function setID1001(string $id = null) {
        self::$id1001 = $id;
    }

    protected static function SID1001() {
        return self::$id1001;
    }

    protected static string $path;
    public static function getID1002() {
        $id1002 = myfunction::random('numb',3).self::$rucid.myfunction::random('numb',3).'@\''.myfunction::random('', 7).'\'';
        self::setUserPath('userdir/'.$id1002);
        return $id1002;
    }

    protected static function setUserPath(string $path) {
        self::$path = $path;
    }

    public static function getUserPath() {
        return self::$path;
    }

    public static function getID1003() {
        return 'MCPS$ID#'.self::getPUBUSERID();
    }

    public static function getID1004(string $id1001 = null) {
        //$id1001 = 'MCP$ID#GfJ16832';
        $count = asmcp_1004_userfolders::where('id_1001', '=', $id1001)->orderBy('id_1004', 'DESC')->count();
        if($count > 0) {
            $data = asmcp_1004_userfolders::where('id_1001', '=', $id1001)->orderBy('id_1004', 'DESC')->limit(1)->get();
            $counter = str_pad((int)substr($data[0]['id_1004'], -16) + 1, 16, 0, STR_PAD_LEFT);
            return $id1001.'&FOLDER#'.$counter;
        }
        else {
            return $id1001.'&FOLDER#0000000000000001';
        }
    }

    public static function getID1005(string $id1001 = null) {
        //$id1001 = 'MCP$ID#GfJ16832';
        $count = asmcp_1005_userplaylists::where('id_1001', '=', $id1001)->orderBy('id_1006', 'DESC')->count();
        if($count > 0) {
            $data = asmcp_1005_userplaylists::where('id_1001', '=', $id1001)->orderBy('id_1006', 'DESC')->limit(1)->get();
            $counter = str_pad((int)substr($data[0]['id_1006'], -16) + 1, 16, 0, STR_PAD_LEFT);
            return $id1001.'&MPL#'.$counter;
        }
        else {
            return $id1001.'&MPL#0000000000000001';
        }
    }

    public static function getID1006(string $id1001 = null) {
        //$id1001 = 'MCP$ID#GfJ16832';
        $count = asmcp_1006_userfiles::where('id_1001', '=', $id1001)->orderBy('id_1005', 'DESC')->count();
        if($count > 0) {
            $data = asmcp_1006_userfiles::where('id_1001', '=', $id1001)->orderBy('id_1005', 'DESC')->limit(1)->get();
            $counter = str_pad((int)substr($data[0]['id_1005'], -16) + 1, 16, 0, STR_PAD_LEFT);
            return $id1001.'&MFL#'.$counter;
        }
        else {
            return $id1001.'&MFL#0000000000000001';
        }
    }

    public static function getID1007() {
        return 'MCPUS$ID#'.self::getPUBUSERID();
    }

    public static function getID1009() {
        return 'MCPUSL$ID#'.self::getPUBUSERID();
    }

}
?>
