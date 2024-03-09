<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Child = Child::all();
        return view ('Child.index')->with('Child', $Child);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Child.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Child::create($input);
        return redirect('Child')->with('flash_message', 'Child Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Child = Child::find($id);
        return view('Child.show')->with('Child', $Child);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Child = Child::find($id);
        return view('Child.edit')->with('Child', $Child);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Child = Child::find($id);
        $input = $request->all();
        $Child->update($input);
        return redirect('Child')->with('flash_message', 'Child Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Child::destroy($id);
        return redirect('Child')->with('flash_message', 'Child deleted!');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
                
        if (Hash::check('12345', $user->password)) {
            return 'Login Failed';
        } else {
            return "Login Successful";
        }
            
    }

    public function displayLogin(Request $request)
    {
        return view('login');
    }
}
