<?php

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'data_type_id' => 1,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'data_type_id' => 1,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'data_type_id' => 1,
                'field' => 'password',
                'type' => 'password',
                'display_name' => 'Password',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'data_type_id' => 1,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'Remember Token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'data_type_id' => 1,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'data_type_id' => 1,
                'field' => 'user_belongsto_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Role',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}',
                'order' => 10,
            ),
            9 => 
            array (
                'id' => 10,
                'data_type_id' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Roles',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'order' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'data_type_id' => 1,
                'field' => 'settings',
                'type' => 'hidden',
                'display_name' => 'Settings',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 12,
            ),
            11 => 
            array (
                'id' => 12,
                'data_type_id' => 2,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'data_type_id' => 2,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'data_type_id' => 2,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'data_type_id' => 2,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'data_type_id' => 3,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'data_type_id' => 3,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => 'Display Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'data_type_id' => 1,
                'field' => 'role_id',
                'type' => 'text',
                'display_name' => 'Role',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 9,
            ),
            21 => 
            array (
                'id' => 56,
                'data_type_id' => 7,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 57,
                'data_type_id' => 7,
                'field' => 'order_number',
                'type' => 'text',
                'display_name' => 'Order Number',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            23 => 
            array (
                'id' => 58,
                'data_type_id' => 7,
                'field' => 'user_id',
                'type' => 'text',
                'display_name' => 'User Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            24 => 
            array (
                'id' => 59,
                'data_type_id' => 7,
                'field' => 'status',
                'type' => 'select_dropdown',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"options":{"pending":"Pending","processing":"Processing","completed":"Completed","decline":"Decline"}}',
                'order' => 4,
            ),
            25 => 
            array (
                'id' => 60,
                'data_type_id' => 7,
                'field' => 'grand_total',
                'type' => 'text',
                'display_name' => 'Grand Total',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            26 => 
            array (
                'id' => 61,
                'data_type_id' => 7,
                'field' => 'item_count',
                'type' => 'text',
                'display_name' => 'Item Count',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            27 => 
            array (
                'id' => 62,
                'data_type_id' => 7,
                'field' => 'is_paid',
                'type' => 'checkbox',
                'display_name' => 'Is Paid',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Paid","off":"Not Paid","checked":true}',
                'order' => 7,
            ),
            28 => 
            array (
                'id' => 63,
                'data_type_id' => 7,
                'field' => 'payment_method',
                'type' => 'select_dropdown',
                'display_name' => 'Payment Method',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"options":{"cash_on_delivery":"Cash on Delivery"}}',
                'order' => 8,
            ),
            29 => 
            array (
                'id' => 64,
                'data_type_id' => 7,
                'field' => 'shipping_fullname',
                'type' => 'text',
                'display_name' => 'Shipping Fullname',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            30 => 
            array (
                'id' => 65,
                'data_type_id' => 7,
                'field' => 'shipping_address',
                'type' => 'text',
                'display_name' => 'Shipping Address',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 10,
            ),
            31 => 
            array (
                'id' => 66,
                'data_type_id' => 7,
                'field' => 'shipping_city',
                'type' => 'text',
                'display_name' => 'Shipping City',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 11,
            ),
            32 => 
            array (
                'id' => 67,
                'data_type_id' => 7,
                'field' => 'shipping_state',
                'type' => 'text',
                'display_name' => 'Shipping State',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 12,
            ),
            33 => 
            array (
                'id' => 68,
                'data_type_id' => 7,
                'field' => 'shipping_zipcode',
                'type' => 'text',
                'display_name' => 'Shipping Zipcode',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 13,
            ),
            34 => 
            array (
                'id' => 69,
                'data_type_id' => 7,
                'field' => 'shipping_phone',
                'type' => 'text',
                'display_name' => 'Shipping Phone',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 14,
            ),
            35 => 
            array (
                'id' => 70,
                'data_type_id' => 7,
                'field' => 'notes',
                'type' => 'text_area',
                'display_name' => 'Notes',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 15,
            ),
            36 => 
            array (
                'id' => 71,
                'data_type_id' => 7,
                'field' => 'billing_fullname',
                'type' => 'text',
                'display_name' => 'Billing Fullname',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 16,
            ),
            37 => 
            array (
                'id' => 72,
                'data_type_id' => 7,
                'field' => 'billing_address',
                'type' => 'text',
                'display_name' => 'Billing Address',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 17,
            ),
            38 => 
            array (
                'id' => 73,
                'data_type_id' => 7,
                'field' => 'billing_city',
                'type' => 'text',
                'display_name' => 'Billing City',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 18,
            ),
            39 => 
            array (
                'id' => 74,
                'data_type_id' => 7,
                'field' => 'billing_state',
                'type' => 'text',
                'display_name' => 'Billing State',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 19,
            ),
            40 => 
            array (
                'id' => 75,
                'data_type_id' => 7,
                'field' => 'billing_zipcode',
                'type' => 'text',
                'display_name' => 'Billing Zipcode',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 20,
            ),
            41 => 
            array (
                'id' => 76,
                'data_type_id' => 7,
                'field' => 'billing_phone',
                'type' => 'text',
                'display_name' => 'Billing Phone',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 21,
            ),
            42 => 
            array (
                'id' => 77,
                'data_type_id' => 7,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 22,
            ),
            43 => 
            array (
                'id' => 78,
                'data_type_id' => 7,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 23,
            ),
            44 => 
            array (
                'id' => 79,
                'data_type_id' => 7,
                'field' => 'order_belongsto_user_relationship',
                'type' => 'relationship',
                'display_name' => 'users',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                'order' => 24,
            ),
            45 => 
            array (
                'id' => 80,
                'data_type_id' => 8,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            46 => 
            array (
                'id' => 81,
                'data_type_id' => 8,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            47 => 
            array (
                'id' => 82,
                'data_type_id' => 8,
                'field' => 'user_id',
                'type' => 'text',
                'display_name' => 'User Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            48 => 
            array (
                'id' => 83,
                'data_type_id' => 8,
                'field' => 'is_active',
                'type' => 'checkbox',
                'display_name' => 'Is Active',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Active","off":"InActive"}',
                'order' => 4,
            ),
            49 => 
            array (
                'id' => 84,
                'data_type_id' => 8,
                'field' => 'description',
                'type' => 'text',
                'display_name' => 'Description',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            50 => 
            array (
                'id' => 85,
                'data_type_id' => 8,
                'field' => 'rating',
                'type' => 'text',
                'display_name' => 'Rating',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 6,
            ),
            51 => 
            array (
                'id' => 86,
                'data_type_id' => 8,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 7,
            ),
            52 => 
            array (
                'id' => 87,
                'data_type_id' => 8,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 8,
            ),
            53 => 
            array (
                'id' => 88,
                'data_type_id' => 8,
                'field' => 'shop_belongsto_user_relationship',
                'type' => 'relationship',
                'display_name' => 'sellers',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'order' => 9,
            ),
            54 => 
            array (
                'id' => 96,
                'data_type_id' => 10,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            55 => 
            array (
                'id' => 97,
                'data_type_id' => 10,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            56 => 
            array (
                'id' => 98,
                'data_type_id' => 10,
                'field' => 'description',
                'type' => 'rich_text_box',
                'display_name' => 'Description',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            57 => 
            array (
                'id' => 99,
                'data_type_id' => 10,
                'field' => 'price',
                'type' => 'text',
                'display_name' => 'Price',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            58 => 
            array (
                'id' => 100,
                'data_type_id' => 10,
                'field' => 'cover_img',
                'type' => 'image',
                'display_name' => 'Cover Img',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            59 => 
            array (
                'id' => 101,
                'data_type_id' => 10,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 6,
            ),
            60 => 
            array (
                'id' => 102,
                'data_type_id' => 10,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 7,
            ),
            61 => 
            array (
                'id' => 103,
                'data_type_id' => 10,
                'field' => 'product_belongsto_shop_relationship',
                'type' => 'relationship',
                'display_name' => 'shops',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Shop","table":"shops","type":"belongsTo","column":"shop_id","key":"id","label":"name","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'order' => 8,
            ),
            62 => 
            array (
                'id' => 104,
                'data_type_id' => 10,
                'field' => 'shop_id',
                'type' => 'text',
                'display_name' => 'Shop Id',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            63 => 
            array (
                'id' => 105,
                'data_type_id' => 11,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 0,
            ),
            64 => 
            array (
                'id' => 106,
                'data_type_id' => 11,
                'field' => 'order_id',
                'type' => 'text',
                'display_name' => 'Order Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 3,
            ),
            65 => 
            array (
                'id' => 107,
                'data_type_id' => 11,
                'field' => 'seller_id',
                'type' => 'text',
                'display_name' => 'Seller Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            66 => 
            array (
                'id' => 108,
                'data_type_id' => 11,
                'field' => 'status',
                'type' => 'select_dropdown',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"options":{"pending":"Pending","processing":"Processing","completed":"Completed","decline":"Decline"}}',
                'order' => 5,
            ),
            67 => 
            array (
                'id' => 109,
                'data_type_id' => 11,
                'field' => 'grand_total',
                'type' => 'text',
                'display_name' => 'Grand Total',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            68 => 
            array (
                'id' => 110,
                'data_type_id' => 11,
                'field' => 'item_count',
                'type' => 'text',
                'display_name' => 'Item Count',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ),
            69 => 
            array (
                'id' => 111,
                'data_type_id' => 11,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 8,
            ),
            70 => 
            array (
                'id' => 112,
                'data_type_id' => 11,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 10,
            ),
            71 => 
            array (
                'id' => 113,
                'data_type_id' => 11,
                'field' => 'order_number',
                'type' => 'text',
                'display_name' => 'Order Number',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 1,
            ),
            72 => 
            array (
                'id' => 114,
                'data_type_id' => 11,
                'field' => 'shipping_fullname',
                'type' => 'text',
                'display_name' => 'Shipping Fullname',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            73 => 
            array (
                'id' => 115,
                'data_type_id' => 11,
                'field' => 'shipping_address',
                'type' => 'text',
                'display_name' => 'Shipping Address',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 11,
            ),
            74 => 
            array (
                'id' => 116,
                'data_type_id' => 11,
                'field' => 'shipping_phone',
                'type' => 'text',
                'display_name' => 'Shipping Phone',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 12,
            ),
            75 => 
            array (
                'id' => 117,
                'data_type_id' => 11,
                'field' => 'sub_order_belongsto_user_relationship',
                'type' => 'relationship',
                'display_name' => 'sellers',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"seller_id","key":"id","label":"name","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'order' => 13,
            ),
        ));
        
        
    }
}