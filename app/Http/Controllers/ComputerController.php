<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()  {
        /* $computers=Computer::included()->get(); */
        $computers=Computer::included()->filter()->get();

        return response()->json($computers);
    }
    //en las api rest no se usa create ya que originalmente ella mostraba un formulario que en este contexto es inutil
    /* public function create() {
        return view('computer.create');
    } */
    public function store(Request $request)  {

        $file = $request->file("urlImage");
        $nombreArchivo = "img_" . time() . "." . $file->guessExtension();
        $request->file('urlImage')->storeAs('media', $nombreArchivo, 'public');

        $procesado=$request->except('urlImage');
        $procesado['urlImage']=$nombreArchivo;


        $computer=Computer::create($procesado);


        return response()->json($computer);
    }
    public function show($id)  {

        $computer=Computer::find($id);
        if (!$computer) {
            return response()->json([
                'mensaje'=>'no existe eso'
            ]);
        }
        return response()->json($computer);
    }

    /* public function update(Request $request,Computer $computer)  {
        $computer->update($request->all());

        return response()->json($computer);
    } */
    //en las api rest no se usa create ya que originalmente ella mostraba un formulario que en este contexto es inutil
/*     public function edit(Computer $computer) {
        return view('computer.edit',compact('computer'));
    }
 */
    public function destroy(Computer $computer) {
        $computer->delete();
        $mensaje='eliminado correctamente';
        return response()->json($mensaje);
    }
}
