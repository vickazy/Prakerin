<?php

use Illuminate\Database\Seeder;

class beritaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita = array(
        	'judul' => 'andssa', 
        	'read_more' => 'asdkskhakaadsad',
        	'content' => 'asd',
        	'id_kategori' => '1',
        	'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()')
        );
        DB::table('beritas')->insert($berita);
    }
}
