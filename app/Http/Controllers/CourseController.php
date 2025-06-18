<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\course;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class CourseController extends Controller
{
    public function index() {
        $courses=course::included()->filter()->get();

        return response()->json($courses);
    }

    /* public function create()  {
        $areas=Area::all();
        $trainingCenters=TrainingCenter::all();



    } */

    public function store(Request $request){
        $course=course::create($request->all());

        return response()->json($course);

    }
    public function show(course $course) {
        return response()->json($course);
    }

    /* public function edit(course $course) {
        $areas=Area::all();
        $traningCenters=TrainingCenter::all();

        return view('courses.edit', compact('course','areas','trainingCenters'));
    } */

    /* public function update(Request $request, course $course) {
        $course->update($request->all());

        return redirect()->route('course.index');
    }
     */
    public function destroy(course $course) {
        $course->delete();

        return response()->json($course);
    }


}
