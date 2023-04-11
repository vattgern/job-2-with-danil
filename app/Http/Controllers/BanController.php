<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BanController extends Controller
{
    public function addBan($id){
        $user = User::find($id);
        $user->update([
            'ban' => true,
        ]);
        return redirect()->back();
    }
    public function removeBan($id){
        $user = User::find($id);
        $user->update([
            'ban' => false,
        ]);
        return redirect()->back();
    }
}
