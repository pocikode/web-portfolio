<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function resume()
    {
        $data = [
            'school' => [],
            'work' => [],
        ];

        $resumes = Resume::all();
        foreach ($resumes as $resume) {
            if ($resume->type === 'school') {
                $data['school'][] = $resume;
            } else {
                $data['work'][] = $resume;
            }
        }

        return response()->json($data);
    }

    public function skill()
    {
        $skills = Skill::all();

        return response()->json($skills);
    }

    public function contact(Request $request)
    {
        // TODO: validation
        Inbox::create($request->only('name', 'email', 'subject', 'message'));

        return response()->json(['message' => 'Success']);
    }
}
