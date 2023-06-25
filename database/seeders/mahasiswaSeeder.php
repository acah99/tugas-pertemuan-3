<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nim' => '1710520099',
            'nama' => 'acah',
            'alamat' => 'Jalan Raya 123',
            'jenis_kelamin' => 'Laki-laki',
        ],
    [
        'nim' => '1710520089',
        'nama' => 'dinda',
        'alamat' => 'Jalan Raya 123',
        'jenis_kelamin' => 'Perempuan',
    ]
);
    }
}
