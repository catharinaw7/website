<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UsersTableSeeder::class);
        $this->call(PengeluaransTableSeeder::class);
        $this->call(PemasukansTableSeeder::class);
        $this->call(TabungansTableSeeder::class);
        $this->call(HistorysTableSeeder::class);
        $this->call(KategorisTableSeeder::class);
       
    }
}
