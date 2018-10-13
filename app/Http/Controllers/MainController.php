<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Service;
use App\Review;
use App\TeamMember;

class MainController extends Controller
{
    public function home() {
        $services = Service::limit(4)->get();
        $projects = Project::limit(3)->get();
        $reviews = Review::limit(3)->get();
        return view('home', compact('services', 'projects', 'reviews'));
    }

    public function about() {
        $team_members = TeamMember::limit(3)->get();
        return view('about', compact('team_members'));
    }

    public function portfolio() {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function blog() {
        return view('blogs');
    }

    public function post() {
        return view('post');
    }
}
