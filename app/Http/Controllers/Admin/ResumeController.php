<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function index()
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

        return view('admin.resume', [
            'resumes' => $data,
        ]);
    }
}
