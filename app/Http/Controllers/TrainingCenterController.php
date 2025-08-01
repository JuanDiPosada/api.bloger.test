<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()  {
        $trainingCenters=TrainingCenter::included()->filter()->sort()->getOrPaginate();;

        return response()->json($trainingCenters);
    }

    /* public function create()  {
        return view('training_centers.create');
    } */

    public function store(Request $request)  {
        $trainingCenter=TrainingCenter::create($request->all());

        return response()->json($trainingCenter);
    }
    public function show($id)  {
        $trainingCenter=TrainingCenter::find($id);

        return response()->json($trainingCenter);
    }

    /* public function update(Request $request,TrainingCenter $trainingCenter) {
         $trainingCenter->update($request->all());

         return redirect()->route('training_center.index');
    } */

    /* public function edit(TrainingCenter $trainingCenter){
        return view('training_centers.edit', compact('trainingCenter'));
    } */

    public function destroy(TrainingCenter $trainingCenter){
        $trainingCenter->delete();

        return response()->json($trainingCenter);
    }

}
