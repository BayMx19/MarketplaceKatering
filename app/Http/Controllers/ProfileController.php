<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $profile = DB::table('users')->where('id', $id)->first();
        // dd($profile);
        return view('profiles.profile', compact('profile'));
    }

    public function edit($id)
    {
        try {
        $decryptedId = decrypt($id);
        $profile = Users::find($decryptedId);
        if (!$profile) {
            return abort(404);
        }

        return view('profiles.editprofile', compact('profile'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            Log::error('Decryption error: ' . $e->getMessage());
            return abort(500, 'Error: Unable to decrypt the ID.');
        }

    }
}