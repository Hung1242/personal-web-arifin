<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectPageController extends Controller
{
    public function projectPage()
    {
        $projects = Project::with('category')->get();
        $project_categories = ProjectCategory::all();
        return view('/landingpage', compact('projects', 'project_categories'));
    }
}
