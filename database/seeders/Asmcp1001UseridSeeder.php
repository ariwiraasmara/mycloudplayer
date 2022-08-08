<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\MyLibs\myfunction;

class Asmcp1001UseridSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        //\App\Models\asmcp_1001_userid::factory()->create();
        $fun = new myfunction();

        for($x=1; $x<11; $x++) {
            if($x < 10) $x = '0'.$x;
            \DB::table('asmcp_1001_userid')->insert([
                # format: MCP$ID#[3_unique_random_char_not_number_and_special][counter_number][4_unique_random_only_number] => MCP$ID#aPt0000000000000015490
                "id_1001" => 'MCP$ID#'.$fun->random('char', 3).$x.$fun->random('numb', 4),
                "id" => $x,
                "nama" => $fun->random('char', 15),
                "tgl_lahir" => '1995-01-01',
                "tlp" => '+628'.$fun->random('numb', 9),
                "pin" => $fun->random('numb', 6)
            ]);
        }

    }
}
