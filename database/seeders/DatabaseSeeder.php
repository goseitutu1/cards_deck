<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::Create([
            'email' => 'user@mail.com',
            'password' => Hash::make("user"),
            'first_name' => 'gideon',
            'last_name' => 'osei tutu',
            'phone_number' => '0550672946',
            'phone_mac_address' => 'fgvhbjnk',
            'department_id' => 1,
            'role_id' => 1,
            'staff_id' => 'emp1234',
        ]);
    }
}
