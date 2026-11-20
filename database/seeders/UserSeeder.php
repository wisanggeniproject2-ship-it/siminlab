<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([ 
            'name' => 'Admin SIMINLAB', 
            'email' => 'admin@smkn2-mjk.sch.id', 
            'password' => Hash::make('admin'), // Enkripsi password 
            'role' => 'Admin', 
            ]); 
            User::create([ 
            'name' => 'Admin SIMINLAB', 
            'email' => 'admin@smkn2-mjk.sch.id', 
            'password' => Hash::make('admin'), // Enkripsi password 
            'role' => 'Admin', 
            ]); 
        User::create([ 
            'name' => 'Siswa Contoh', 
            'email' => 'siswa@smkn2-mjk.sch.id', 
            'password' => Hash::make('siswa'), 
            'role' => 'Siswa', 
            ]); 
    }
}
