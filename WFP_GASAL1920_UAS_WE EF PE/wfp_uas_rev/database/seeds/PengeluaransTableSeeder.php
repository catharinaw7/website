<?php

use Illuminate\Database\Seeder;

class PengeluaransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengeluarans')->insert([
        	'nama' => "Makan Pagi",
        	'nominal' => 25000,
        	'keterangan' => "",
        	'foto' => "pengeluaran1.jpg",
        	'users_id' => 1,
            'kategoris_id' => 2
        ]);
    }
}
