<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('home',compact('user'));
    }

    public function submitPayment(Request $request){
        $user = Auth::user();
        $file = request()->file('payment_image');
        $file_name = $user->name.".".$file->getClientOriginalExtension();
        $file->move(public_path('storage/payment_image'),$file_name);
        $user->update(['payment_image' => $file_name]);
        return redirect('/home');
    }

}
