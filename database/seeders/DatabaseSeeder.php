<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ProductSeeder::class, CategoriesSeeder::class, brandsSeeder::class, bannerSeeder::class]);
        // \App\Models\User::factory(10)->create();
        $admin = [
           'name' => 'Nguyen Van Thanh',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'Admin'
        ] ;
        DB::table('users')->insert($admin);
        $promotion = [
            'name' => 'Khách hàng mới',
            'code' => 'XINCHAO',
            'price' => 30000
        ];
        DB::table('promotions')->insert($promotion);
    }
}
