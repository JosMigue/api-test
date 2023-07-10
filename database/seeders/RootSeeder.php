<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class RootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['name' => 'root', 'email' => 'root@root.com', 'password' => Hash::make(env('CONFIG_ROOT_PASSWORD'))];
        User::create($data);
    }
}
