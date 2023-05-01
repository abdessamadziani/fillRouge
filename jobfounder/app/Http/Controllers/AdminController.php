<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;


class AdminController extends Controller
{

    public function __construct()
    {
          $this->middleware('admin');

    }
    //
    public function index()
    {
        $today = now()->format('Y-m-d');


        $applicants = Job::all();
        $totalapplicants = 0;
        $newApplicantsCount=0;
        foreach($applicants as $app) {
            $totalapplicants += $app->users()->count();
            $newApplicantsCount += $app->users()->whereDate('job_user.created_at', $today)
            ->where('user_type', 'seeker')
            ->count();

        }

        // dd($newApplicantsCount);



        $newCompaniesCount = Company::whereDate('created_at', $today)->count();
        $newJobsCount = Job::whereDate('created_at', $today)->count();
        $newSeekersCount = User::whereDate('created_at', $today)->where('user_type','seeker')->count();


        $all_seekers=User::where('user_type','seeker')->get();
        $seekers=User::latest()->take(5)->where('user_type','seeker')->get();
        $companies=Company::latest()->take(5)->get();
        $jobs=Job::latest()->take(5)->get();
        $nbseekers=$all_seekers->count();
        $nbcompanies=$companies->count();
        $nbjobs=Job::all()->count();
        return view("admin.admindashboard",compact(['seekers','companies','jobs','all_seekers','nbseekers','nbcompanies','nbjobs','newCompaniesCount','newJobsCount','newSeekersCount','totalapplicants','newApplicantsCount']));
    }



    public function getusers()
    {
        $allusers=User::all();
        $allseekers=User::where('user_type','seeker')->get();
        $allrecruiters=User::where('user_type','recruiter')->get();


        return view('admin.users',compact(['allusers','allseekers','allrecruiters']));
    }
    public function totalapplicants()
        {
            $totalapplicants=Job::all()->users()->count();
            dd($totalapplicants);
            return view("admin.admindashboard",compact(['totalapplicants']));


        }
}
