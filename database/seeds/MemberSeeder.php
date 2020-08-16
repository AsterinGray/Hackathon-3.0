<?php

use Illuminate\Database\Seeder;
use App\Member;
use App\User;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'name' => 'TestBinus1',
            'email' => 'testing@bncc.net',
            'phone_number' => '08123456789',
            'line_id' => 'testing',
            'git_id' => 'testing',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '2000-01-01',
            'user_id' => 2,
        ]);

        Member::create([
            'name' => 'TestBinus2',
            'email' => 'testing2@bncc.net',
            'phone_number' => '08123456789',
            'line_id' => 'testing',
            'git_id' => 'testing',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '2000-01-01',
            'user_id' => 2,
        ]);

        Member::create([
            'name' => 'TestBinus3',
            'email' => 'testing3@bncc.net',
            'phone_number' => '08123456789',
            'line_id' => 'testing',
            'git_id' => 'testing',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '2000-01-01',
            'user_id' => 3,
        ]);

        Member::create([
            'name' => 'TestBinus4',
            'email' => 'testing4@bncc.net',
            'phone_number' => '08123456789',
            'line_id' => 'testing',
            'git_id' => 'testing',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '2000-01-01',
            'user_id' => 3,
        ]);

    }
}
