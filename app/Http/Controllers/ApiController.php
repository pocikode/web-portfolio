<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;

class ApiController extends Controller
{
    public function profile()
    {
        $profile = User::where('username', 'agus')->first()->toArray();
        if (!$profile) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $profile['photo'] = $profile['photo'] ? asset('storage/' . $profile['photo']) : asset('img/dummy-profile.png');
        $profile['social_media'] = [];

        $social_media = SocialMedia::all();
        foreach ($social_media as $socmed) {
            $profile['social_media'][$socmed->name] = $socmed->link;
        }

        return response()->json($profile);
    }
}
