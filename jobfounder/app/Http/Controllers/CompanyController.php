<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
        $company=Company::find($id);
        return view('company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return View('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'cname'=>'required',
            'address'=>'required',
            'phone'=>'required|numeric|digits:10',
            'website'=>'required',
            'description'=>'required',

        ]);
        //
        $user_id=auth()->user()->id;
          Company::where('user_id',$user_id)->update([
            'name'=>$cname=$request->input('cname'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'website'=>$request->input('website'),
            'slug'=>Str::slug($cname,'-'),
            'description'=>$request->input('description'),
        ]);
        return redirect()->back()->with('msg','Company Info Updated Successfully !');
    }


    public function updatelogo(Request $request)
    {
        $this->validate($request,[
            'logo'=>'required|mimes:png',
        ]);
        $user_id = auth()->user()->id;

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $request->file('logo')->store('public/logos');
            Company::where('user_id', $user_id)->update([
                'logo' =>$request->file('logo')->store('logos'),
            ]);

            return redirect()->back()->with('msg logo', 'Logo Updated Successfully');
        }


    }



    public function updatecoverimage(Request $request)
    {
        $this->validate($request,[
            'coverimage'=>'required',
        ]);
        $user_id = auth()->user()->id;

        if ($request->hasFile('coverimage') && $request->file('coverimage')->isValid()) {
             $request->file('coverimage')->store('public/coverimages');
            Company::where('user_id', $user_id)->update([
                'cover_photo' =>$request->file('coverimage')->store('coverimages'),
            ]);

            return redirect()->back()->with('msg cover', 'Cover Image Updated Successfully');
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
