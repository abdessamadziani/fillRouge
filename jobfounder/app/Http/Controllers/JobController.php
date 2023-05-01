<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Job;
use App\Models\Company;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;






class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        // if is not a recruiter he can olny do ..
          $this->middleware('recruiter',['except'=>array('index','show','apply','desapply')]);

    }



    public function contact()
    {
        return view('welcome');
    }

    public function sendEmail(Request $request)
    {
        //
       $details = [
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,

       ];
       Mail::to('zianiabdssamad30@gmail.com')->send(new ContactMail($details));
       Alert::success('Mail send ',' Your Email has been send successfully');

       return back();
    }



    public function index()
    {
        //
        // $jobs=Job::latest()->paginate(6);
        $jobs=Job::latest()->get();

        $companies=Company::all();
        return view('welcome',compact(['jobs','companies']));
    }


    // public function alljobs(Request $request)
    // {
    //     //
    //     $keyword=$request->input('title');
    //     $type=$request->input('type');
    //     $category=$request->input('category_id');
    //     $address=$request->input('address');
    //     // dd($keyword .' '. $type.''.$category.''.$address);
    //     if($keyword || $type || $category || $address)
    //     {
    //         $jobs=Job::where('title','LIKE','%'.$keyword.'%')
    //         ->orwhere('type',$type)
    //         ->orwhere('category_id',$category)
    //         ->orwhere('address','title','LIKE','%'.$address.'%')->paginate(6);
    //         $companies=Company::all();
    //         return view('welcome',compact(['jobs','companies']));

    //     }
    //     else
    //     {

    //         $jobs=Job::latest()->paginate(6);
    //         $companies=Company::all();
    //         return view('welcome',compact(['jobs','companies']));
    //     }
    // }




    public function myjobs()
    {
        $jobs=Job::where('user_id',auth()->user()->id)->get();

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
        Alert::success('Success',' Job Announce added successfully');
        return redirect()->back() ;


    }
    public function applicant()
    {
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

    public function desapply(Request $request,string $id)
    {
        $job_id=Job::find($id);
        $job_id->users()->detach(auth()->user()->id);
        return redirect()->back();
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
        Alert::success('Success',' Job Announce updated successfully');
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
        Alert::success('Success',' Job Announce deleted successfully');

        return redirect()->back();

    }
}
