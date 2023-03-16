<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageSchool extends Controller
{
    public function landingPage()
    {
        $school = School::where('name', request('sd'))->get();
        if (request('sd')) {
            return view('student.pages.landing-sdn')->compact($school);
        }
    }
}
