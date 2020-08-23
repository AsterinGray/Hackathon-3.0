<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Member;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role == 2)
        {
            return redirect('/admin');
        }
        $members = Member::where('user_id',$user->id)->get();
        $membersCount = Member::where('user_id',$user->id)->count();
        // dd($membersCount);
        return view('home',compact('user','members','membersCount'));
    }

    public function submitPayment(Request $request){
        dd($request);
        $request->validate([
            'payment_image' => 'required','file','max:5120','mimes:jpg,jpeg,pdf,png',
        ]);
        $user = Auth::user();
        $file = request()->file('payment_image');
        $file_name = $user->name.".".$file->getClientOriginalExtension();
        $file->move(public_path('storage/payment_image'),$file_name);
        $user->update(['payment_image' => $file_name]);
        return redirect('/home');
    }

    public function add(Request $request){
        
        $user = Auth::user();
        $membersCount = Member::where('user_id',$user->id)->count();
        if($membersCount < 4){
            $request->validate([
                'name' => ['required'],
            'email' => ['required','email','unique:members,email'],
            'phone_number' => ['required','numeric','digits_between:10,14'],
            'line_id' => ['required'],
            'git_id' => ['required'],
            'place_of_birth' => ['required'],
            'date_of_birth' => ['required'],
            'id_card' => ['required','file','max:5120','mimes:jpg,jpeg,pdf,png'],
            'cv' => ['required','file','max:5120','mimes:jpg,jpeg,pdf,png'],
            ]);
            $data = $request->all();
            // dd($data);
            $data['user_id'] = $user->id;
            // dd($data);
            $file1 = request()->file('id_card');
            $file_name1 = $user['name']."_".$data['name'].".".$file1->getClientOriginalExtension();
            $file1->move(public_path('storage/id_card'),$file_name1);

            $cv1 = request()->file('cv');
            $cv_name1 = $user['name']."_".$data['name'].".".$cv1->getClientOriginalExtension();
            $cv1->move(public_path('storage/cv'),$cv_name1);

            $data['id_card'] = $file_name1;
            $data['cv'] = $cv_name1;
            Member::create($data);
        }
        return redirect('/home');
    }

}
