<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()){
            $user = Auth::user();
            if($user->is_admin){
                $users = User::all();
                return view('users.index', compact('users'));

            }else{
                $projects = Project::all();
                return view('project.index',compact('projects'));
            }
        } else {
            return view('home.blade');
        }

    }
}
