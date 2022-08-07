<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'password' => bcrypt('admin12345'),
                'is_admin' => true,
            ]
        );
        //
    }
}
