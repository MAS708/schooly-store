<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-06 11:29:47',
                'updated_at' => '2021-03-06 11:29:47',
            ),
            25 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-03-06 11:29:50',
                'updated_at' => '2021-03-06 11:29:50',
            ),
            26 => 
            array (
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2021-03-06 11:44:27',
                'updated_at' => '2021-03-06 11:44:27',
            ),
            27 => 
            array (
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2021-03-06 11:44:27',
                'updated_at' => '2021-03-06 11:44:27',
            ),
            28 => 
            array (
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2021-03-06 11:44:27',
                'updated_at' => '2021-03-06 11:44:27',
            ),
            29 => 
            array (
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2021-03-06 11:44:27',
                'updated_at' => '2021-03-06 11:44:27',
            ),
            30 => 
            array (
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2021-03-06 11:44:27',
                'updated_at' => '2021-03-06 11:44:27',
            ),
            31 => 
            array (
                'id' => 47,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2021-03-07 06:07:25',
                'updated_at' => '2021-03-07 06:07:25',
            ),
            32 => 
            array (
                'id' => 48,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2021-03-07 06:07:25',
                'updated_at' => '2021-03-07 06:07:25',
            ),
            33 => 
            array (
                'id' => 49,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2021-03-07 06:07:25',
                'updated_at' => '2021-03-07 06:07:25',
            ),
            34 => 
            array (
                'id' => 50,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2021-03-07 06:07:25',
                'updated_at' => '2021-03-07 06:07:25',
            ),
            35 => 
            array (
                'id' => 51,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2021-03-07 06:07:25',
                'updated_at' => '2021-03-07 06:07:25',
            ),
            36 => 
            array (
                'id' => 57,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2021-03-08 13:54:20',
                'updated_at' => '2021-03-08 13:54:20',
            ),
            37 => 
            array (
                'id' => 58,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2021-03-08 13:54:20',
                'updated_at' => '2021-03-08 13:54:20',
            ),
            38 => 
            array (
                'id' => 59,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2021-03-08 13:54:20',
                'updated_at' => '2021-03-08 13:54:20',
            ),
            39 => 
            array (
                'id' => 60,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2021-03-08 13:54:20',
                'updated_at' => '2021-03-08 13:54:20',
            ),
            40 => 
            array (
                'id' => 61,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2021-03-08 13:54:20',
                'updated_at' => '2021-03-08 13:54:20',
            ),
        ));
        
        
    }
}