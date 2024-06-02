<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name'          => 'ilandbz',
            'password'      => Hash::make('123456'),
            'role_id'       => Role::where('nombre', 'Super Usuario')->value('id')
        ]);
        User::firstOrCreate([
            'name'          => 'alvacorperu@hotmail.com',
            'password'      => Hash::make('44062785'),
            'role_id'       => Role::where('nombre', 'Super Usuario')->value('id')
        ]);        
    }
}
