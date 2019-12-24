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
        factory(App\User::class, 10)->create();
        App\User::create(['first_name' => 'Admin', 'last_name' => 'Adminovic', 'email' => 'admin@admin.com', 'password' => bcrypt('adminko')]);
    }
}
