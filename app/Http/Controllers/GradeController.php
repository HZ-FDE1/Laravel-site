<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = Grade::latest()->get();


        return view('grades.index',  ['grades' => $grade]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'course_name' => 'required',
            'test_name' => 'required',
            'best_grade' => 'required|numeric'
        ]);

        Grade::create($validatedAttributes);
        return redirect(route('grades.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade) {

        $validatedAttributes = $request->validate([
            'course_name' => 'required',
            'test_name' => 'required',
            'best_grade' => 'required'
        ]);

        $grade->update($validatedAttributes);

        return redirect(route('grades.index', $grade));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade  $grade) {
        $grade->delete();

        return redirect(route('grades.index'));
    }
}
