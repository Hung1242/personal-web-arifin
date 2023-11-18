<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class LandingPageController extends Controller
{
    public function landingPage()
    {
        $blogs = Blog::with('category')
            ->orderBy('id', 'ASC')
            ->paginate(8);
            $projects = Project::with('category')->get();
            $project_categories = ProjectCategory::all();

        // return view('/landingpage', ['blogs' => $blogs], ['project_categories' => $project_categories], ['projects' => $projects]);

        return view('/landingpage', compact('blogs', 'projects', 'project_categories'));
    }
}
