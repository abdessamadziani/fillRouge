<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('profile-pro.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'address'=>'required',
            'bio'=>'required',
            'phone'=>'required|numeric|digits:10',
            'exp'=>'required'
        ]);
        //
       $user_id=auth()->user()->id;
        Profile::where('user_id',$user_id)->update([
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'experience'=>$request->input('exp'),
            'bio'=>$request->input('bio')

        ]);
        return redirect()->back()->with('msg','Profile Updated Successfully !');

    }

    // public function coverletter(Request $request)
    // {
    //     $user_id=auth()->user()->id;
    //     $cover=$request->file('letter')->store('public/files');
    //     profile::where('user_id',$user_id)->update([
    //         'cover_letter'=>$cover
    //     ]);
    //      return redirect()->back()->with('msg','Cover Letter updated Successfully');
    // }
    public function coverletter(Request $request)
{
    $this->validate($request,[
        'letter'=>'required|mimes:pdf,doc,docx|max:20000',  
    ]);
    $user_id = auth()->user()->id;

    if ($request->hasFile('letter') && $request->file('letter')->isValid()) {
        $cover = $request->file('letter')->store('public/files');

        profile::where('user_id', $user_id)->update([
            'cover_letter' => $cover
        ]);

        return redirect()->back()->with('msg letter', 'Cover Letter updated Successfully');
    }
  

}


    public function resume(Request $request)
    {
        $this->validate($request,[
            'resume'=>'required|mimes:pdf,doc,docx|max:20000',  
        ]);
        $user_id=auth()->user()->id;
        if($request->hasFile('resume') && $request->file('resume')->isValid()) {

        $resume=$request->file('resume')->store('public/files');
        profile::where('user_id',$user_id)->update([
            'resume'=>$resume
        ]);
         return redirect()->back()->with('msg resume','Resume updated Successfully');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
