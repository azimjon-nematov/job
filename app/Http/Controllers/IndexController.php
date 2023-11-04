<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Job;

class IndexController extends Controller
{
    public function index() {
        $jobs = Job::with('companies', 'locations', 'types')->paginate(3);
        return view('index', ['jobs' => $jobs,]);
    }
}
