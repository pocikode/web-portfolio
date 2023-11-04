<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('admin.profile', ['user' => $user]);
    }

    public function save(Request $request)
    {
        // TODO: validation
        $photo_path = $request->user()->photo ?? null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = 'profile_' . $request->user()->id . '.' . $file->getClientOriginalExtension();
            $photo_path = $file->storeAs('img', $filename, 'public');
        }

        $request->user()->update([
            'photo' => $photo_path,
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'city' => $request->post('city'),
            'about' => $request->post('about'),
        ]);

        return redirect()->route('admin.home');
    }
}
