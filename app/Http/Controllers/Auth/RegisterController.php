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
        $messages = [
            
        ];
        $customAttributes = [
            'member1_name' => 'name',
            'member1_email' => 'email address',
            'member1_phone_number' => 'number',
            'member1_line_id' => 'line ID',
            'member1_git_id' => 'git ID',
            'member1_place_of_birth' => 'place of birth',
            'member1_date_of_birth' => 'date of birth',
            'member1_id_card' => 'ID Card',
            'member1_cv' => 'CV',
        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'alpha_num'],
            'member1_name' => ['required'],
            'member1_email' => ['required','email','unique:members,email'],
            'member1_phone_number' => ['required','numeric','digits_between:10,14'],
            'member1_line_id' => ['required'],
            'member1_git_id' => ['required'],
            'member1_place_of_birth' => ['required'],
            'member1_date_of_birth' => ['required'],
            'member1_id_card' => ['required','file','max:5120','mimes:jpg,jpeg,pdf,png'],
            'member1_cv' => ['required','file','max:5120','mimes:jpg,jpeg,pdf,png'],
        ], $messages, $customAttributes);
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

        $cv1 = request()->file('member1_cv');
        $cv_name1 = $data['name']."_".$data['member1_name'].".".$cv1->getClientOriginalExtension();
        $cv1->move(public_path('storage/cv'),$cv_name1);

        $user = User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'is_binusian' => $data['is_binusian'],
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
            'user_id' => $user['id'],
            'cv' => $cv_name1,
        ]);
        
        return $user;
    }
}
