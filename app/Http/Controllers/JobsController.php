<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;
use App\Models\Jobs;
use App\Models\User;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(1);
        $user->assignRole('admin');

        $contractor = User::find(2);
        $contractor->assignRole('contractor');
        $jobs = Jobs::all();
        return view('jobs.index',compact('jobs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = new Jobs();
        return view('jobs.create',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'started_at'=>'date',
            'price'=>'required|numeric',
            'hours'=>'required|numeric',
        ]);
        $validated['id_user'] = auth()->id();
        Jobs::create($validated);
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobs =Jobs::find($id);
        return view('jobs.show',compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobs =Jobs::find($id);
        return view('jobs.edit',compact('jobs'));
    }

}
