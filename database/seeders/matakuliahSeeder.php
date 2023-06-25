<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliahs')->insert([
            'nama' => 'webservice',
            'sks' => 3,
            'jurusan_id' => 2,
        ],
    );
    }
}
