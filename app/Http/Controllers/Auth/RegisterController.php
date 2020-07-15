<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Member;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'member1_name' => ['required'],
            'member1_email' => ['required'],
            'member1_phone_number' => ['required'],
            'member1_line_id' => ['required'],
            'member1_git_id' => ['required'],
            'member1_place_of_birth' => ['required'],
            'member1_date_of_birth' => ['required'],
            'member1_id_card' => ['required'],
            'member2_name' => ['required'],
            'member2_email' => ['required'],
            'member2_phone_number' => ['required'],
            'member2_line_id' => ['required'],
            'member2_git_id' => ['required'],
            'member2_place_of_birth' => ['required'],
            'member2_date_of_birth' => ['required'],
            'member2_id_card' => ['required'],
            'member3_name' => ['required'],
            'member3_email' => ['required'],
            'member3_phone_number' => ['required'],
            'member3_line_id' => ['required'],
            'member3_git_id' => ['required'],
            'member3_place_of_birth' => ['required'],
            'member3_date_of_birth' => ['required'],
            'member3_id_card' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $file1 = request()->file('member1_id_card');
        $file_name1 = $data['name']."_".$data['member1_name'].".".$file1->getClientOriginalExtension();
        $file1->move(public_path('storage/id_card'),$file_name1);

        $file2 = request()->file('member2_id_card');
        $file_name2 = $data['name']."_".$data['member2_name'].".".$file2->getClientOriginalExtension();
        $file2->move(public_path('storage/id_card'),$file_name2);

        $file3 = request()->file('member3_id_card');
        $file_name3 = $data['name']."_".$data['member3_name'].".".$file3->getClientOriginalExtension();
        $file3->move(public_path('storage/id_card'),$file_name3);

        $user = User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);

        Member::create([
            'name' => $data['member1_name'],
            'email' => $data['member1_email'],
            'phone_number' => $data['member1_phone_number'],
            'line_id' => $data['member1_line_id'],
            'git_id' => $data['member1_git_id'],
            'place_of_birth' => $data['member1_place_of_birth'],
            'date_of_birth' => $data['member1_date_of_birth'],
            'id_card' => $file_name1,
            'team_id' => $user['id'],
        ]);

        Member::create([
            'name' => $data['member2_name'],
            'email' => $data['member2_email'],
            'phone_number' => $data['member2_phone_number'],
            'line_id' => $data['member2_line_id'],
            'git_id' => $data['member2_git_id'],
            'place_of_birth' => $data['member2_place_of_birth'],
            'date_of_birth' => $data['member2_date_of_birth'],
            'id_card' => $file_name2,
            'team_id' => $user['id'],
        ]);

        Member::create([
            'name' => $data['member3_name'],
            'email' => $data['member3_email'],
            'phone_number' => $data['member3_phone_number'],
            'line_id' => $data['member3_line_id'],
            'git_id' => $data['member3_git_id'],
            'place_of_birth' => $data['member3_place_of_birth'],
            'date_of_birth' => $data['member3_date_of_birth'],
            'id_card' => $file_name3,
            'team_id' => $user['id'],
        ]);

        return $user;
    }
}
