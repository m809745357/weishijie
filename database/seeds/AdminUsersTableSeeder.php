<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$GnZfWxRYsCtNhcfS27./Yu80c3/508O9DT9U3WX9q35a0q4Efb/6G',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-09-11 16:37:27',
                'updated_at' => '2017-09-11 16:37:27',
            ),
        ));
        
        
    }
}