<?php

use Illuminate\Database\Seeder;

class HistorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('historys')->insert([
        	'pengeluarans_id' => 1,
        	'pemasukans_id' => 1
        ]);
    }
}
