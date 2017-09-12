<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '官网设置',
                'icon' => 'fa-cogs',
                'uri' => '/companies',
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:36',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 9,
                'title' => '系统设置',
                'icon' => 'fa-tasks',
                'uri' => NULL,
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:57',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 10,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:57',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 11,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:57',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 12,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:57',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 13,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:57',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 14,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'created_at' => NULL,
                'updated_at' => '2017-09-12 16:54:57',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 2,
                'title' => '公司时事',
                'icon' => 'fa-newspaper-o',
                'uri' => 'tidings',
                'created_at' => '2017-09-12 15:32:24',
                'updated_at' => '2017-09-12 16:54:57',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 3,
                'title' => '师资力量',
                'icon' => 'fa-graduation-cap',
                'uri' => 'teachers',
                'created_at' => '2017-09-12 15:46:06',
                'updated_at' => '2017-09-12 16:54:57',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 4,
                'title' => '课程介绍',
                'icon' => 'fa-th-list',
                'uri' => 'courses',
                'created_at' => '2017-09-12 15:56:34',
                'updated_at' => '2017-09-12 16:54:57',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 5,
                'title' => '开课咨询',
                'icon' => 'fa-question-circle',
                'uri' => 'curricula',
                'created_at' => '2017-09-12 16:09:29',
                'updated_at' => '2017-09-12 16:54:57',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 6,
                'title' => '招贤纳士',
                'icon' => 'fa-flag',
                'uri' => 'careers',
                'created_at' => '2017-09-12 16:38:36',
                'updated_at' => '2017-09-12 16:54:57',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 7,
                'title' => '关于我们',
                'icon' => 'fa-meh-o',
                'uri' => 'aboutus',
                'created_at' => '2017-09-12 16:45:00',
                'updated_at' => '2017-09-12 16:54:57',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 8,
                'title' => '公司历程',
                'icon' => 'fa-line-chart',
                'uri' => 'histories',
                'created_at' => '2017-09-12 16:48:29',
                'updated_at' => '2017-09-12 16:54:57',
            ),
        ));
        
        
    }
}