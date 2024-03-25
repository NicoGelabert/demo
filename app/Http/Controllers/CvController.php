<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Education;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $educations = Education::all();
        return view('layouts.cv.curriculum-vitae', [
            'experiences' => $experiences,
            'educations' => $educations,
        ]);
    }
}
