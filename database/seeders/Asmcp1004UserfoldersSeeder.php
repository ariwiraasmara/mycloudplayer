<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use File;

use App\Models\User;
use App\MyLibs\myfunction;

class Asmcp1004UserfoldersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->faker = Faker::create();

        //Diambil secara manual dari tabel
        $pubuserid = 'iro12935';
        $id1001 = 'MCP$ID#'.$pubuserid;

        //for($x=2; $x < 4; $x++) {
            $foldername = $this->faker->name;
            \DB::table('asmcp_1004_userfolder')->insert([
                "id_1004" => 'MCP$ID#'.$pubuserid.'&FOLDER#0000002',
                "id_1001" => $id1001,
                "foldername" => $foldername,
                "ket" => 'Folder Musikku'
            ]);
            $folder = $path.'/'.$foldername;
            File::makeDirectory($folder, $mode = 0777, true, true);
        //}
    }
}
