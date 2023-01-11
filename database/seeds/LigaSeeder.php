<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
            'nama' => 'Development',
            'gambar' => 'Development.png',
        ]);

        DB::table('ligas')->insert([
            'nama' => 'Fhotographer',
            'gambar' => 'Fhotographer.png',
        ]);

        DB::table('ligas')->insert([
            'nama' => 'Marketing',
            'gambar' => 'Marketing.png',
        ]);

        DB::table('ligas')->insert([
            'nama' => 'Business',
            'gambar' => 'Business.png',
        ]);
    }
}
