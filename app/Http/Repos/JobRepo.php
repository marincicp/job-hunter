<?php

namespace App\Http\Repos;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobRepo
{

   public function create(array $jobData)
   {

      $job = Auth::user()->employer->job()->create(
         Arr::except($jobData, "tags")
      );

      if ($jobData["tags"]) {

         foreach (explode(",", $jobData["tags"]) as $tag) {
            $job->tag($tag);
         }
      }
      return $job;
   }



   public function update($jobData)
   {

      $job = Auth::user()->employer->job()->update(Arr::except($jobData, "tags"));

      if ($jobData["tags"]) {
         foreach (explode(",", $jobData["tags"]) as $tag) {
            $job->tag($tag);
         }
      }
   }
}