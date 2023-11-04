<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $social_media = [];
        $socmed_data = SocialMedia::all();
        foreach ($socmed_data as $socmed) {
            $social_media[$socmed['name']] = $socmed['link'];
        }

        return view('admin.profile', compact('user', 'social_media'));
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

    public function socmed(Request $request)
    {
        // TODO: validation
        foreach ($request->only('linkedin', 'github', 'twitter', 'instagram') as $name => $link) {
            SocialMedia::updateOrCreate(
                ['name' => $name],
                ['name' => $name, 'link' => $link]
            );
        }

        return redirect()->route('admin.home');
    }
}
