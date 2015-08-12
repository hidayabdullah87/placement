<?php

namespace App\Http\Controllers;

use App\Contracts\JobAPI;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    private $jobAPI;

    public function __construct(JobAPI $jobAPI)
    {
        $this->jobAPI = $jobAPI;
    }
    //
    public function getJob($job_id)
    {
        $job = $this->jobAPI->getJob($job_id);

        return view('jobs/detail', compact('job'));
    }

    public function redirectToIndeed($job_id)
    {
        $job = $this->jobAPI->getJob($job_id);

        return redirect()->away($job->url);
    }
}
