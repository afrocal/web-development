<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class PublicJobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('start_date', 'desc')->paginate(10);
        return view('public_jobs.index', compact('jobs'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        if ($query) {
            $jobs = Job::where('position_title', 'LIKE', "%{$query}%")
                       ->orWhere('company', 'LIKE', "%{$query}%")
                       ->orWhere('location', 'LIKE', "%{$query}%")
                       ->orderBy('start_date', 'desc')
                       ->paginate(10);
        } else {
            $jobs = Job::orderBy('start_date', 'desc')->paginate(10);
        }

        // Return the partial view rendered as HTML
        return view('public_jobs.partials.jobs_list', compact('jobs'))->render();
    }
}
