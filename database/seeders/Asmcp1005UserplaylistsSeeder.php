<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use File;

use App\Models\User;
use App\MyLibs\myfunction;

class Asmcp1005UserplaylistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $this->faker = Faker::create();

        //Diambil secara manual dari tabel
        $pubuserid = 'iro12935';
        $id1001 = 'MCP$ID#'.$pubuserid;
        $path = 'userdir/5071246@\'eJ:HW]z\'';

        for($x=2; $x < 10; $x++) {
            \DB::table('asmcp_1005_userplaylist')->insert([
                'id_1005' => $id1001.'&MF#000000000000'.$x,
                'id_1001' => $id1001,
                'playlist' => $this->faker->name
            ]);
        }
    }
}
