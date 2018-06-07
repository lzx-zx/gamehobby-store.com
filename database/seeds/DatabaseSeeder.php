<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
        	'name' => 'Lee Zi Xiang',
        	'email' => 'lzxorochi@gmail.com',
        	'password' => Hash::make('lzx96082411260994'),
        	'remember_token' => str_random(10),
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'name' => 'Electronic',
            'description' => 'This category is for electronic product only',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'Macbook Pro 15 inch with Touch Bar',
            'details' => '15 inch, 128 GB SSD , Intel Graphics',
            'description' => 'Macbook Pro Launched in 2016',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
