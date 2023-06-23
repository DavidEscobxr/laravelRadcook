<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {

       return "hola hijitos";

      // return view('cursos.index');
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {

       // return $request->all();
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        //  return $curso;
        $curso->save();
    }


    public function show($curso)
    {
        //compact('curso')// ['curso'=>$curso]
        // return view('cursos.show',['curso'=>$curso]);
        return view('cursos.show', compact('curso'));
    }
}