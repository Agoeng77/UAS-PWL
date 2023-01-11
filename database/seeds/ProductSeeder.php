<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // headset seeder (4)
         DB::table('products')->insert([
            'nama' => 'ReactJS Course',
            'gambar' => 'react.png',
            'liga_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'AngularJS Course',
            'gambar' => 'angular.png',
            'liga_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Mastering Architecture and Real Estate Photography',
            'gambar' => 'photography1.png',
            'liga_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Digital Photography for Beginners with DSLR cameras',
            'gambar' => 'photography2.png',
            'liga_id' => '2',
        ]);

    
        // mouse seeder (4)
        DB::table('products')->insert([
            'nama' => 'Learn Digital Marketing with SmartCourse',
            'gambar' => 'marketing1.png',
            'liga_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'Learn Youtube Online Marketing with SmartCourse',
            'gambar' => 'marketing2.png',
            'liga_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'Leadership in the family business',
            'gambar' => 'business1.png',
            'liga_id' => '4',
        ]);

        DB::table('products')->insert([
            'nama' => 'Interpersonal Skills in the Workplace',
            'gambar' => 'business2.png',
            'liga_id' => '4',
        ]);


        // keyboard seeder (4)
        // DB::table('products')->insert([
        //     'nama' => 'Rexus Daxa M71',
        //     'gambar' => 'rexusdaxam71.jpg',
        //     'liga_id' => '1',
        // ]);

        // DB::table('products')->insert([
        //     'nama' => 'Razer Black Widow V3',
        //     'gambar' => 'razerblackwidv3.jpg',
        //     'liga_id' => '2',
        // ]);

        // DB::table('products')->insert([
        //     'nama' => 'Fantech Maxfit 61',
        //     'gambar' => 'fantechmaxfit61.jpg',
        //     'liga_id' => '3',
        // ]);

        // DB::table('products')->insert([
        //     'nama' => 'ROG Claymoore',
        //     'gambar' => 'rogclaymore.jpg',
        //     'liga_id' => '4',
        // ]);
    }
}
