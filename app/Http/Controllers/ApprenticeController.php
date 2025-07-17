<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use App\Models\Computer;
use App\Models\course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()  {

        $apprentices= apprentice::included()->filter()->sort()->getOrPaginate();

        return response()->json($apprentices);

    }

    /* public function create()  {
        $courses=course::all();
        $computers=Computer::all();

        return view('apprentice.create',compact('courses','computers'));

    } */

    public function store(Request $request){


        $apprentice=apprentice::create($request->all());

        return response()->json($apprentice);

    }
    public function show(Apprentice $apprentice) {
        return response()->json($apprentice);
    }
    /* public function edit(Apprentice $apprentice) {
        $courses=course::all();
        $computers=Computer::all();

        return view('apprentice.edit', compact('apprentice','courses','computers'));
    } */
    /* public function update(Request $request, Apprentice $apprentice) {

        $apprentice->update($request->all());

        return redirect()->route('apprentice.index');
    } */
    public function destroy(Apprentice $apprentice) {

        $apprentice->delete();

        return response()->json($apprentice);
    }
}
