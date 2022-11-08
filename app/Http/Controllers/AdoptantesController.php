<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Adoptantes;
use Illuminate\Support\Facades\DB;



class AdoptantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoptantes=Adoptantes::all(); 
       // return $adoptantes;
        return view('adoptantes.index',compact('adoptantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adoptantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into adoptantes(nombre,apellidos,direccion,telefono,sexo,correo) values (?,?,?,?,?,?)',
        [
            $request->nombre, $request->apellidos, $request->direccion, $request->telefono,$request->sexo, $request->correo
        ]);
        return redirect(route('adoptantes.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $adoptantes = Adoptantes::find($id);
        // return view('adoptantes.show', ['adoptantes' => $adoptantes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adoptantes = Adoptantes::find($id);
        return view('adoptantes.edit', ['adoptantes' => $adoptantes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $adoptantes= Adoptantes::find($id);

        $adoptantes->nombre =$request->nombre;
        $adoptantes->apellidos =$request->apellidos;
        $adoptantes->direccion =$request->direccion;
        $adoptantes->telefono =$request->telefono;
        $adoptantes->sexo =$request->sexo;
        $adoptantes->correo =$request->correo;

        $adoptantes->save();
        return redirect('adoptantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adoptantes::destroy($id);
        return redirect("adoptantes");
    }
}
