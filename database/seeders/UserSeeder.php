<?php

namespace Database\Seeders;

use App\Models\User;
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
        $developer = User::query()->create([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
            'user_type' => 1,
            'bank_branch_id' => 1,
            'created_at' => now(),
            'account_token' => bin2hex(openssl_random_pseudo_bytes(30)),
        ]);
        User::factory()->count(30)->create();
    }
}
