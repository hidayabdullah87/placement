<?php

namespace App\Http\Controllers;

use App\Contracts\JobAPI;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    public function index(Request $request, JobAPI $jobAPI)
    {
//        $user = $request->user();

        $jobs = $jobAPI->searchJobs();

        return view('students/main', compact('user', 'jobs'));

    }

    public function profile(Request $request, JobAPI $jobAPI)
    {
//        $user = $request->user();

        $jobs = $jobAPI->searchJobs();

        return view('students/profile', compact('user', 'jobs'));

    }

}
