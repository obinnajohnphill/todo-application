<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'    => 'test',
            'password'   =>  Hash::make('testpa$$word'),
            'last_login_date' => Carbon\Carbon::now()
        ]);
    }
}
