<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Job;




class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function __construct()
    // {
    //     $this->middleware('recruiter',['except'=>array('index','show')]);
    // }


    public function index()
    {
        //
        $jobs=Job::all();
        $jobs=Job::paginate(3);
        return view('welcome',compact('jobs'));
    }

    public function myjobs()
    {
        $jobs=Job::where('user_id',auth()->user()->id)->get();
        // $nbapplicants=Job::where('user_id',auth()->user()->id)->where('id',$id)->get();

        //dd($jobs);

        return view('jobs.myjobs',compact(['jobs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return View('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $this->validate($request,[
        //     'address'=>'required',
        //     'bio'=>'required',
        //     'phone'=>'required|numeric|digits:10',
        //     'exp'=>'required'
        // ]);
        //
       $user_id=auth()->user()->id;
       $company_id=auth()->user()->companies->id;

        Job::create([
            'user_id'=>$user_id,
            'company_id'=>$company_id,
            'title'=>$title=$request->input('title'),
            'slug'=>Str::slug($title,'-'),
            'description'=>$request->input('description'),
            'roles'=>$request->input('roles'),
            'category_id'=>$request->input('category_id'),
            'position'=>$request->input('position'),
            'address'=>$request->input('address'),
            'type'=>$request->input('type'),
            'status'=>$request->input('status'),
            'last_date'=>$request->input('last_date'),
        ]);
        return redirect()->back();

    }
    public function applicant()
    {
        //  $applicants=Job::has('users')->where('user_id',auth()->user()->id)->get();
        $applicants=Job::where('user_id',auth()->user()->id)->get();

           //dd($applicants);
        return View('jobs.applicants',compact('applicants'));

    }

    public function jobapplicants(string $id)
    {

        //  $applicants=Job::has('users')->where('user_id',auth()->user()->id)->where('id',$id)->get();
         $applicants=Job::where('user_id',auth()->user()->id)->where('id',$id)->get();

        //    dd($applicants);

         return View('jobs.spicificjobsapplicants',compact('applicants'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $job=Job::find($id);
        // dd($job->position);
        return view('jobs.show',compact('job'));
    }

    public function apply(Request $request,string $id)
    {
        $job_id=Job::find($id);
        $job_id->users()->attach(auth()->user()->id);
        return redirect()->back()->with('msg','Job applyed Successfully !');
    }












    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $job=Job::find($id);
        return view('jobs.editjob',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        //
        // $user_id=auth()->user()->id;
        // $company_id=auth()->user()->company->id;
        $job=Job::findOrFail($id);
        $job->update($request->all());
        return redirect()->back();
        // $job->update([
        //     'user_id'=>$user_id,
        //     'company_id'=>$company_id,
        //     'title'=>$title=$request->input('title'),
        //     'slug'=>Str::slug($title,'-'),
        //     'description'=>$request->input('description'),
        //     'roles'=>$request->input('roles'),
        //     'category_id'=>$request->input('category_id'),
        //     'position'=>$request->input('position'),
        //     'address'=>$request->input('address'),
        //     'type'=>$request->input('type'),
        //     'status'=>$request->input('status'),
        //     'last_date'=>$request->input('last_date'),
        //  ]);
        //  return redirect()->back()->with('msg','Job Anounce updated Successfully !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $job=Job::findOrFail($id);
        $job->delete();
        return redirect()->back();

    }
}
