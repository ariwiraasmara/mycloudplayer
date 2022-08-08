<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\MyLibs\myfunction;
use File;

class TableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $fun = new myfunction();

        for($x=1; $x<2; $x++) {
            $token = $fun->random('combwisp', 10);

            \DB::table('users')->insert([
                'id'                => $x,
                'username'          => 'qkessler',
                'email'             => 'lstehr@example.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password'          => myfunction::encrypt('abc123'),// Hash::make('abc123'),
                'remember_token'    => $token,
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => null,
                'deleted_at'        => null,
            ]);

            \DB::table('asmcp_1000_user')->insert([
                'id'                => $x,
                'username'          => 'qkessler',
                'email'             => 'lstehr@example.com',
                'password'          => myfunction::encrypt('abc123'),// Hash::make('abc123'),
                'tlp'               => '+628'.$fun->random('numb', 9),
                'pin'               => Hash::make('123456'),
                'remember_token'    => $token,
            ]);

            $pubuserid = $fun->random('char', 3).$x.$fun->random('numb', 4);

            // Generate Fake Data asmcp_1001_userid
            // format id_1001
            // MCP$ID#[3_unique_random_char_not_number_and_special][counter_number][4_unique_random_only_number]
            // => MCP$ID#aPt15490
            $id1001 = 'MCP$ID#'.$pubuserid;
            \DB::table('asmcp_1001_userid')->insert([
                "id_1001"   => $id1001,
                "id"        => $x,
                "nama"      => 'qkessler lstehr',
                "tgl_lahir" => '1995-01-01',
                'photo'     => 'user.png',
            ]);


            // Generate Fake Data asmcp_1002_userdir

            //-- format id_1002
            // MCP$ROOTDIR#[3_random_number][USERID_1][3_random_number]@'[7_Char_Unique_Random_ID]'
            // => MCP$ROOTDIR#'15401058@Av7%y$Q'
            $id1002 = $fun->random('numb',3).$x.$fun->random('numb',3).'@\''.$fun->random('', 7).'\'';
            $path = 'userdir/'.$id1002;
            \DB::table('asmcp_1002_userdir')->insert([
                "id_1002" => 'MCP$ROOTDIR#'.$id1002,
                "id_1001" => $id1001,
                "rootdir" => $path
            ]);
            File::makeDirectory($path, $mode = 0777, true, true);

            // Generate Fake Data asmcp_1003_usersecurity
            //-- contoh format: MCPS$ID#[USERID2] => MCPS$ID#aPt0000000000000015490
            \DB::table('asmcp_1003_usersecurity')->insert([
                "id_1003"       => 'MCPS$ID#'.$pubuserid,
                "id_1001"       => $id1001,
            ]);


            // Generate Fake Data asmcp_1004_userfolders
            // -- contoh format:
            // [USERID2]&FOLDER#[counter_number] => MCP$ID#aPt0000000000000015490&FOLDER#0000001
            $id1004 = 'MCP$ID#'.$pubuserid.'&FOLDER#0000000000000001';
            \DB::table('asmcp_1004_userfolder')->insert([
                "id_1004"    => $id1004,
                "id_1001"    => $id1001,
                "foldername" => 'My Music',
                "ket"        => 'Folder Musikku'
            ]);
            $folder = $path.'/My Music';
            File::makeDirectory($folder, $mode = 0777, true, true);

            // Generate Fake Data asmcp_1005_userplaylists
            // -- contoh format:
            // [USERID2]&MPL#[counter_number] => MCP$ID#aPt0000000000000015490&MPL#0000000000001
            $id1005 = $id1001.'&MPL#0000000000000001';
            \DB::table('asmcp_1005_userplaylist')->insert([
                "id_1005"  => $id1005,
                "id_1001"  => $id1001,
                "playlist" => 'default',
            ]);

            // Generate Fake Data asmcp_1006_userfiles
            // -- contoh format:
            // [USERID2]&MFL#[counter_number] => MCP$ID#aPt0000000000000015490&MFL#0000000000000001
            \DB::table('asmcp_1006_userfile')->insert([
                "id_1006"   => $id1001.'&MFL#0000000000000001',
                "id_1001"   => $id1001,
                "filename"  => null,
                "genre"     => null,
                "artist"    => null,
                "album"     => null,
                "composer"  => null,
                "publisher" => null,
                "ket"       => null,
                "favorited" => null,
                "folder"    => $id1004,
                "playlist"  => $id1005,
            ]);

            // Generate Fake Data asmcp_1007_usersetting
            // -- contoh format:
            // MCPU$ID#[USERID2] => MCPUS$ID#aPt0000000000000015490
            \DB::table('asmcp_1007_usersetting')->insert([
                "id_1007"           => 'MCPUS$ID#'.$pubuserid,
                "id_1001"           => $id1001,
                "theme"             => '#fff',
                "text"              => '#000',
                "bar"               => null,
                "wall_img"          => null,
                "wall_heigth"       => null,
                "wall_width"        => null,
                "wall_size"         => null,
                "wall_position"     => null,
                "wall_repeat"       => null,
                "wall_attachment"   => null,
            ]);

            \DB::table('asmcp_1009_userstoragelevel')->insert([
                "id_1009" => 'MCPUSL$ID#'.$pubuserid,
                "id_1001" => $id1001,
                "level"   => 1,
            ]);
        }
    }
}
