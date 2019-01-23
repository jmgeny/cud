<?php

namespace cud\Http\Controllers;

use Illuminate\Http\Request;
use cud\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::orderBy('id','desc')->paginate(20);
        return view('person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create',compact('person'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person;

        $person->apellido = $request->apellido;
        $person->nombre = $request->nombre;
        $person->dni = $request->dni;
        $person->fecha = $request->fecha;
        $person->email = $request->email;
        $person->fechadisca = $request->fechadisca;
        $person->adquirida = $request->adquirida;
        $person->telefono = $request->telefono;
        $person->status = '1'; 

        $person->obrasocial()->associate($request->obrasocial);
        $person->trabajo()->associate($request->trabajo);
        $person->estudio()->associate($request->estudio);
        $person->discapacidad()->associate($request->discapacidad);

        //imagen
        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->apellido . $request->nombre . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "avatars";

            $path = $file->storeAs($folder, $name);
            $person->avatar = $path;
        } 

        $person->save();

        return redirect()->route('person.index')->with('info','Fue creado una persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);
        return view('person.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('person.edit', compact('person'));
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
        $person = Person::findOrFail($id);

        $person->apellido = $request->apellido;
        $person->nombre = $request->nombre;
        $person->dni = $request->dni;
        $person->fecha = $request->fecha;
        $person->email = $request->email;
        $person->fechadisca = $request->fechadisca;
        $person->adquirida = $request->adquirida;
        $person->telefono = $request->telefono;
        $person->status = $request->status;

        $person->obrasocial()->associate($request->obrasocial);
        $person->trabajo()->associate($request->trabajo);
        $person->estudio()->associate($request->estudio);
        $person->discapacidad()->associate($request->discapacidad);


        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->apellido . $request->nombre . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "avatars";

            $path = $file->storeAs($folder, $name);
            $person->avatar = $path;
        }

        $person->save();
        return redirect()->route('person.index')->with('info','Fue modificada la persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->status ='0';
        $person->update();

        return back()->with('info','Se inactivo la persona');
    }
}
