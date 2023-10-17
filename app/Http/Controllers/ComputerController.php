<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Http\Requests\ComputerRequest;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //var_dump(computer::all());die;
        //return computer::all();
        return view('computers.index', [
            'computers' => Computer::all()->sortBy('id'),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create',[
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerRequest $request)
    {
        Computer::create($request->all());

        
       

        return redirect('/computers');
    }

    /**
     * Display the specified resource.
     */
    public function show (Computer $computer)   
    {
        //var_dump($computer);die;      
        return view('computers.show', [
            'computer' => $computer,
            
        ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        //$computer = computer::findOrFail($id);
        //var_dump($computer);die;
        return view('computers.edit', [
            'computer' => $computer,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputerRequest $request, Computer $computer)
    {
        $computer->update($request->all());

        return redirect('/computers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy
    (Computer $computer)
    {
        $computer->delete();
        return redirect('/computers');
    }   
    
}
