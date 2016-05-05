<?php

use Illuminate\Database\Seeder;

class method extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	'nama' => 'Saya Sedang Di uji oleh pa Rizki');
        DB::table('laravels')->insert($data);
    }
}
