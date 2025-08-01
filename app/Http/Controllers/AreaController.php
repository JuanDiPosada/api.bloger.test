<?php

namespace App\Http\Controllers;


use App\Models\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function index(){
        $areas= Area::included()->filter()->sort()->getOrPaginate();
        return response()->json($areas);
    }
    /* public function create(){
        return view('area.create');
    } */
    public function store(Request $request){
        $area=area::create($request->all());

        return response()->json($area);
    }

     public function show($id)
    {
        $area = Area::find($id);

        return response()->json($area);
    }

     //Destroy
     public function destroy (Area $area){

        $area->delete();

        return response()->json($area);
    }

      /* public function edit(Area $area){

        return view('area.edit',compact('area'));

      } */

     //Update
    /* public function update(Request $request, Area $area){

        $area->update($request->all());

        return redirect()->route('area.index');

      } */

}
