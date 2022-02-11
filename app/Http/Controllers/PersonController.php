<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Proyect;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $personas = Person::select('id','first_name','last_name','document_type','document','exp','telephone','cellphone','email')->get();

        return view('person.lista',compact('personas'));
    }

    public function listProyect($person_id)
    {
        $persona = Person::find($person_id);
        $proyectos = Proyect::where('person_id',$person_id)->get();
        return view('person.proyect',compact('proyectos','persona'));


    }

    public function createProyect($person_id)
    {
        $persona = Person::find($person_id);

        return view('person.create_proyect',compact('persona'));


    }

    public function store_proyect(Request $request)
    {
        $object = json_decode($request->json_string);
        $proyect = new Proyect;
        $proyect->name = $object->name;
        $proyect->commitment_document = $object->commitment_document;
        $proyect->amount = $object->amount;
        $proyect->objective = $object->objective;
        $proyect->transaction_number = $object->transaction_number;
        $proyect->date_start = $object->date_start;
        $proyect->date_end = $object->date_end;
        $proyect->person_id = $object->person_id;
        $proyect->save();

        return redirect('proyectos/'.$proyect->person_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
