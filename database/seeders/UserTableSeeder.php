<?php

namespace Database\Seeders;

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'Camilo Orozco Arenas',
            'email'=>'ratamotrix.9980@gmail.com',
            'password'=> bcrypt('123456789'),
            'username' =>'camiloxzc',
        ])->assignRole('admin');

        User::factory(20)->create();

    }
}
