<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lessor;
class LessorController extends Controller
{
    //LISTAR TODOS LOS LESSOR
    function index(){
        $lessor=Lessor::all();
        //$lessor->toArray();
        //dd($lessor);
        return view('index',['lessor'=>$lessor->toArray()]);
        
        //$lessor=Lessor::all();
        //return view('viewLessor',['lessor'=>$lessor->toArray()]);
    }

    //

    function edit($codeLessor){
        //dd($codeLessor);
        $lessor=Lessor::find($codeLessor);
        //dd($lessor->codeLessor);
        //dd($lessor->toArray());
        return view('edit', compact('lessor'));
    }
    
    function create(){
        return view('create');
    }

    function show($codeLessor){

    }

    public function destroy($codeLessor)
    {
         Lessor::find($codeLessor)->delete();
        return redirect()->route('index')->with('success','Registro eliminado satisfactoriamente');
    }
    function update(Request $request, $codeLessor){
        
        $lessor=Lessor::find($codeLessor);
        $lessor->nameLessor=$request->input('nameLessor');
        $lessor->dniLessor=$request->input('dniLessor');
        $lessor->surnamesLessor=$request->input('surnamesLessor');
        $lessor->genderLessor=$request->input('genderLessor');
        $lessor->save();
        return redirect('/lessor');

    }

    function store(Request $request){
        $this->validate($request, [
            'nameLessor' => 'required|min:5',
            'dniLessor' => 'required|min:8',
            'surnamesLessor' => 'required|min:5',
            'genderLessor'=>'required|min:1',
        ]);
        Lessor::create($request->all());
        return redirect('/lessor');
    }
    function allLessor(){
        return view('allLessor');
    }
}
