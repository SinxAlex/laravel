<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Backpack\CRUD;
class JobController extends Controller
{
        public function index()
        {

            $vacancies = Vacancy::paginate(10); // 10 записей на страницу
            return view('jobs.index',['vacancies'=>$vacancies]);
        }

    public function create()
    {
        $vacancy=new Vacancy();
        return view('jobs.create',compact('vacancy'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'start_at'=>'date',
            'price'=>'required|numeric',
            'hours_work'=>'required|numeric',
        ]);
        $validated['id_user'] = auth()->id();
        Vacancy::create($validated);

        return redirect()->route('jobs.index')->with('success', 'Вакансия создана успешно!');
    }
}
