<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Project;
use App\Service;
use App\Review;
use App\Blog;
use App\TeamMember;

class MainController extends Controller
{
    public function home() {
        $services = Service::limit(4)->get();
        $projects = Project::limit(3)->get();
        $reviews = Review::limit(3)->get();
        $company = Company::limit(1)->get();
        return view('home', compact('services', 'projects', 'reviews', 'company'));
    }

    public function about() {
        $team_members = TeamMember::limit(3)->get();
        $company = Company::limit(1)->get();
        return view('about', compact('team_members', 'company'));
    }

    public function portfolio() {
        $projects = Project::all();
        $company = Company::limit(1)->get();
        return view('portfolio', compact('projects', 'company'));
    }

    public function blog() {
        $posts = Blog::all();
        $company = Company::limit(1)->get();
        return view('blogs', compact('posts', 'company'));
    }

    public function post($id) {
        $post = Blog::where('id', $id)->get();
        $company = Company::limit(1)->get();
        return view('single', compact('post', 'company'));
    }
}
