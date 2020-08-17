<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'BNCC',
            'password' => Hash::make('VIVABNCC!'),
            'role' => 2,
        ]);

        User::create([
            'name' => 'TestBNCC1',
            'password' => Hash::make('VIVABNCC!'),
            'role' => 0,
        ]);

        User::create([
            'name' => 'TestBNCC2',
            'password' => Hash::make('VIVABNCC!'),
            'role' => 0,
        ]);
    }
}
