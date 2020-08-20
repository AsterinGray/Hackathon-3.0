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
        return redirect()->back();
    }
    
    public function delete(Request $request)
    {
        $user = User::findOrFail($request->delete_id);
        $user->delete();
        return redirect()->back();
    }

    public function setBinusian(Request $request)
    {
        $user = User::findOrFail($request->identity_id);
        $user->role = 1;
        $user->save();
        return redirect()->back();
    }

    public function setPayment(Request $request)
    {
        $user = User::findOrFail($request->payment_id);
        switch($request->input('action')){
            case 'approve':
                $user->payment_status = 1;
            break;
            case 'reject':
                $user->payment_status = 2;
            break;
        }
        $user->save();
        return redirect()->back();
    }
}
