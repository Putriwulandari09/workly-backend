<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobListing;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->json([
            'total_jobs' => JobListing::count(),
            'total_categories' => Category::count(),
            'total_users' => User::count(),
        ]);
    }
}