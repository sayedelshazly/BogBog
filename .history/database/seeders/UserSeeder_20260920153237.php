<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sayed Elshazly',
            'email' => 'selshazly@gc',
            'password' => Hash::make('password'),
            'phone_number' => '7340985300',
        ]);
    }
}
