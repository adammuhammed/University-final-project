<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsInterfaceController extends Controller
{
    public function list(){
        $accounts = \App\Models\User::where('isAdmin', true)->orWhere('isManager', true)->get();
        return view('accounts.list', ['accounts' => $accounts]);
    }

    public function delete($id){
        $account = \App\Models\User::find($id);
        $account->delete();
        return redirect()->route('accounts');
    }

    public function toggle($id){
        $account = \App\Models\User::find($id);
        $account->isManager = !$account->isManager;
        $account->isAdmin = !$account->isAdmin;
        $account->save();
        return redirect()->route('accounts');
    }
}
