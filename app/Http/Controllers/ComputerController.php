<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

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
            'computers' => Computer::all()
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
    public function store(Request $request)
    {
        //var_dump($request->all());die;
        //var_dump($request->computer_name);die;
        $computer = new Computer();
        $computer->name = $request->name;
        $computer->description = $request->description;
        $computer->os = $request->os;
        $computer->ram = $request->ram;
        $computer->price = $request->price;
        $computer->storage = $request->storage;
        $computer->monitor = $request->monitor;
        $computer->purchase_date = $request->purchase_date;

        
        $computer->save();

        return redirect('/computers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, Computer $computer)
    {
        $computer->name = $request->name;
        $computer->description = $request->description;
        $computer->os = $request->os;
        $computer->ram = $request->ram;
        $computer->price = $request->price;
        $computer->storage = $request->storage;
        $computer->monitor = $request->monitor;
        $computer->purchase_date = $request->purchase_date;
                
        $computer->update();

        return redirect('/computers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
