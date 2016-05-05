<?php

use Illuminate\Database\Seeder;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = array(
        	'judul_kategori' => 'ada1', );

        DB::table('kategoris')->insert($kategori);
    }
}
