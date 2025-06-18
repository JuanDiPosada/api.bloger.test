<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class TeacherController extends Controller
{
    public function index()  {
        $teachers=Teacher::included()->filter()->get();

        return response()->json($teachers);
    }

    /* public function create()  {
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();

        return view('teacher.create',compact('areas', 'trainingCenters'));
    } */

    public function store(Request $request)  {
        $teacher=Teacher::create($request->all());

        return response()->json($teacher);
    }

    public function show(Teacher $teacher) {
        return view('teacher.show',compact('teacher'));
    }

    /* public function update(Request $request,Teacher $teacher) {

        $teacher->update($request->all());

        return redirect()->route('teacher.index');

    } */

    /* public function edit(Teacher $teacher) {
        return view('teacher.edit',compact('teacher'));
    } */

    public function destroy(Teacher $teacher) {
        $teacher->delete();

        return response()->json($teacher);
    }
}
