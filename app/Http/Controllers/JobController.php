<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function create()
    {
        return view("jobs.create");
    }

    public function index()
    {
        $jobs = Job::latest()->with(["employer","tags"])->get();
        $featuredJobs = Job::latest()->get()->where("featured", true);

        return view("jobs.index", [
            "featuredJobs" => $featuredJobs,
            "jobs" => $jobs,
            "tags" => Tag::all()
        ]);
    }


    public function store(Request $request)
    {
        $jobData = $request->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", Rule::in("Part Time", "Full Time")],
            "url" => ["required"],
            "tags" => ["nullable"]
        ]);

        $jobData["featured"] = $request->has("featured");

        $job = Auth::user()->employer->job()->create(
            Arr::except($jobData, "tags")
        );

        if ($jobData["tags"]) {

            foreach (explode(",", $jobData["tags"]) as $tag) {
                $job->tag($tag);
            }
        }
        return redirect("/");
    }
}