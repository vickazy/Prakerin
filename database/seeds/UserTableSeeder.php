<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('users')->truncate();

        $user = array(
            'name' => 'Administrator',
			'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        );

        // Comment the below to stop the seeder
        DB::table('users')->insert($user);
    }
}