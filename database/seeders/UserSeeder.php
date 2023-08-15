<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Fawwaz Hudzalfah Saputra',
            'nickname'  => 'manusiacoding_',
            'email'     => 'manusiacoding29@gmail.com',
            'password'  => Hash::make('fawwaz29'),
            'image'     => 'storage/users/unnamed.jpg',
        ]);
    }
}
