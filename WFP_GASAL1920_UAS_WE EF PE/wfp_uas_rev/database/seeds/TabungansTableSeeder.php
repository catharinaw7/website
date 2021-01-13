<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TabungansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabungans')->insert([
        	'nama' => "Pergi Singapore",
        	'target' => 5000000,
        	'progres' => 0,
        	'tanggal' => Carbon::create('2020','06','12'),
        	'users_id' => 1,
            'kategoris_id' => 3
        ]);
    }
}
