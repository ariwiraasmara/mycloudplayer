<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Asmcp1008LevelingsystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $memory = 4; $monthly = 0;
        $yearly     = [0, 20, 47, 67,  93, 113, 133, 167, 187];
        $lifetime   = [0, 30, 50, 70, 100, 120, 150, 170, 190];
        for($xp = 0; $xp < 9; $xp++) {
            if($monthly == 2) $monthly=$monthly+2;
            \DB::table('asmcp_1008_levelingsystem')->insert([
                'level'             => (int)$xp+1,
                'memory'            => $memory,
                'monthly_pay_usd'   => $monthly,
                'yearly_pay_usd'    => $yearly[$xp],
                'lifetime_pay_usd'  => $lifetime[$xp],
            ]);
            $memory = $memory * 2;
            $monthly = $monthly + 2;
        }
    }
}
