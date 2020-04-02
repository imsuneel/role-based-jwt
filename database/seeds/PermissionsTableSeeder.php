<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->insert([
            ['role_id' => '1','name'=>'/api/get-manager'],
            ['role_id' => '1','name'=>'/api/get-customer'],
            ['role_id' => '1','name'=>'/api/get-account'],
            ['role_id' => '2','name'=>'/api/get-customer'],
            ['role_id' => '2','name'=>'/api/get-account'],
            ['role_id' => '3','name'=>'/api/get-account'],
            
        ]);
    }
}
