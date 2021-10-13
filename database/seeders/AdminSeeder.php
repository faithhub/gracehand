<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $check = User::where('email', 'admin@gmail.com')->first();
        
        if(!$check){
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'referral' => 'Admin', 
                'password' => Hash::make('Admin@123'),
                'role' => 'Admin',
            ]);
        }
    }
}
