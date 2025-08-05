<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class jobController extends Controller
{
    //
    static function index(): View
    {
        $jobs = Job::getAllJobs();
        return view('job/index', ['jobs' => $jobs, 'name' => 'Bille Gueffal']);
    }
}
