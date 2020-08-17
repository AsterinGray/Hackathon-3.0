<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $users = User::all();
        return view('admin', compact('users'));
    }

    public function view(Request $request, User $user)
    {
        $data = User::find($user->id)->member;
        // dd($data);
        return view('admin_view',compact('data'));
    }

    public function edit(Request $request, User $user)
    {
        $data = User::find($user->id)->member;
        return view('admin_edit',compact('data'));
    }

    public function update(Request $request, Member $member)
    {
        $data = $request->all();
        $member->update($data);
        return redirect('/home');
    }
    
    public function delete(Request $request, User $user)
    {
        $user->delete();
        return redirect('/home');
    }
}
