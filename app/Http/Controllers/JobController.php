<?php

namespace App\Http\Controllers;

use App\Http\Repos\JobRepo;
use App\Http\Requests\StoreJobRequest;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function __construct(protected JobRepo $jobRepo) {}



    /**
     * Show the form for creating a new job.
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view("jobs.create");
    }




    /**
     * Display list of jobs, feturedJobs and tags
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $jobs = Job::latest()->with(["employer", "tags"])->get();
        $featuredJobs = Job::latest()->get()->where("featured", true);

        return view("jobs.index", [
            "featuredJobs" => $featuredJobs,
            "jobs" => $jobs,
            "tags" => Tag::all()
        ]);
    }




    /**
     * Create a new job
     * @param \App\Http\Requests\StoreJobRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreJobRequest $request)
    {
        $jobData = $request->validated();
        $jobData["featured"] = $request->has("featured");
        $this->jobRepo->create($jobData);
        return redirect("/");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {



        return view("jobs.edit", ["job" => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreJobRequest $request, Job $job)
    {

        $jobData = $request->validated();

        $this->jobRepo->update($jobData);
    }


    /**
     * Display list of jobs created by specific employer
     * @param \App\Models\Employer $employer
     * @return \Illuminate\Contracts\View\View
     */
    public function getAllEmployerJobs(Employer $employer)
    {
        if (! Gate::allows("show-employer-jobs", [$employer])) {
            abort(403);
        }

        $jobs = $employer->job;
        return view("jobs.employer-jobs-index", ["jobs" => $jobs]);
    }
}
