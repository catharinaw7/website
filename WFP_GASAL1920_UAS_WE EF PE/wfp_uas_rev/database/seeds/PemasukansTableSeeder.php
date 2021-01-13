<?php

use Illuminate\Database\Seeder;

class PemasukansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemasukans')->insert([
        	'nama' => "Uang Saku",
        	'nominal' => 100000,
        	'keterangan' => "uang saku bulan Januari",
        	'users_id' => 1,
            'kategoris_id' => 1,
        ]);
    }
}
