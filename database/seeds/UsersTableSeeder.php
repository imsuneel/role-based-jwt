<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            ['name' => 'Admin','email'=>'admin@admin.com','role_id'=>'1','password'=>bcrypt('123456')],
            ['name' => 'Manager1','email'=>'manager1@manager.com','role_id'=>'2','password'=>bcrypt('123456')],
            ['name' => 'Manager2','email'=>'manager2@manager.com','role_id'=>'2','password'=>bcrypt('123456')],
            ['name' => 'Manager3','email'=>'manager3@manager.com','role_id'=>'2','password'=>bcrypt('123456')],
            ['name' => 'customer1','email'=>'customer1@customer.com','role_id'=>'3','password'=>bcrypt('123456')],
            ['name' => 'customer2','email'=>'customer2@customer.com','role_id'=>'3','password'=>bcrypt('123456')],
            ['name' => 'customer3','email'=>'customer3@customer.com','role_id'=>'3','password'=>bcrypt('123456')],
            ['name' => 'customer4','email'=>'customer4@customer.com','role_id'=>'3','password'=>bcrypt('123456')],
            ['name' => 'customer5','email'=>'customer5@customer.com','role_id'=>'3','password'=>bcrypt('123456')],
            ['name' => 'customer6','email'=>'customer6@customer.com','role_id'=>'3','password'=>bcrypt('123456')],
            
        ]);
    }
}
