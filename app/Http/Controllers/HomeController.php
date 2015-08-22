<?php

namespace App\Http\Controllers;

use App\Contracts\JobAPI;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(JobAPI $jobAPI)
    {
        $jobs = $jobAPI->searchJobs();

        return view('main', compact('jobs'));
    }
}
