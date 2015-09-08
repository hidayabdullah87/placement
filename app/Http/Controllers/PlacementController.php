<?php

namespace App\Http\Controllers;

use App\Contracts\JobAPI;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PlacementController extends Controller
{
    //
    public function index(JobAPI $jobAPI, $keyword)
    {
        $jobs = $jobAPI->searchJobs($keyword);
        return view('placements/main', compact('jobs', 'keyword'));
    }

    public function indexQuery()
    {
        $keyword = Input::get('keyword');
        return redirect()->route('placement', $keyword);
    }
}
