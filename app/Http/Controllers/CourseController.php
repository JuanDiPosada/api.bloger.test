<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\course;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses=course::all();

        return view('courses.index',compact('courses'));
    }

    public function create()  {
        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();


        return view('courses.create',compact('areas','trainingCenters'));
    }

    public function store(Request $request){
        $course=course::create($request->all());

        return redirect()->route('course.index');

    }
    public function show(course $course) {
        return view('courses.show', compact('course'));
    }
    public function edit(course $course) {
        $areas=Area::all();
        $traningCenters=TrainingCenter::all();

        return view('courses.edit', compact('course','areas','trainingCenters'));
    }
    public function update(Request $request, course $course) {
        $course->update($request->all());

        return redirect()->route('course.index');
    }
    public function destroy(course $course) {
        $course->delete();

        return redirect()->route('course.index');
    }


}
