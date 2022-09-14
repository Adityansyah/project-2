<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $palsu = Faker::create('USA');
        for ($i = 0; $i <= 50; $i++) {
            DB::table('users')->insert([
                'name' => $palsu->name,
                'email' => $palsu->email,
                'username' => Str::random(8),
                'role' => $palsu->randomElement(['useradmin', 'superadmin', 'user']),
                'picture' => "",
                'blocked' => $palsu->randomElement(['0', '1']),
                'status' => $palsu->randomElement(['online', 'offline']),
                'password' => Hash::make('ersalomo'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y:m:d H:i:s')
            ]);
        }
    }
}
