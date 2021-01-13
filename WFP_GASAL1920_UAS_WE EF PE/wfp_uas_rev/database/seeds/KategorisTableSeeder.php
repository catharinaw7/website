<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'name' => "OVO",
        	'type' => "pemasukan"
        ]);

        DB::table('kategoris')->insert([
            'name' => "Makan",
            'type' => "pengeluaran"
        ]);

        DB::table('kategoris')->insert([
            'name' => "Travel",
            'type' => "tabungan"
        ]);
    }
}
