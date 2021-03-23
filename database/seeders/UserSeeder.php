<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'firstname' => 'Super',
            'lastname' => 'ADMIN',
            'email' => 'super@test.mail',
            'phone' => '777777777',
            'address' => 'Super Address',
            'password' => bcrypt('super')
        ]);
    }
}
