<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charity;
use App\Models\CharityJob;
use App\Models\Project;
use App\Models\Volunteer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function base(){
        $charities = Charity::latest()->take(5)->get();
        $projects = Project::latest()->take(5)->get();
        $jobs = CharityJob::latest()->take(5)->get();
        return view('welcome',compact('charities','projects','jobs'));
    }
}
