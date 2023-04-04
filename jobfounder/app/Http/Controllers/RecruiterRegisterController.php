<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;




class RecruiterRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function RecruiterRegistration(Request $request)
        {
            $user= User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'user_type' => $request['user_type'],
                'password' => Hash::make($request['password']),
            ]);

               Company::create([
                $name=$request['cname'],
                'user_id' => $user->id,
                'name' => $name,
                'slug' => Str::slug($name, '-'),

            ]);
            return redirect()->to('login');

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
        //
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
