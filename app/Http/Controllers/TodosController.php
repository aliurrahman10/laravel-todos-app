<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todos;

class TodosController extends Controller
{
    public function index(){


        return view('todos.index')->with('todos', Todos::all());
    }

    public function show(Todos $todo){

        return view('todos.show')->with('todo', $todo);
        
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $todo = new Todos();

        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->completed = false;

        $todo->save();

        session()->flash('message', 'Item has been successfully added');

        return redirect('/todos');
    }

    public function edit(Todos $todo){

        return view('todos.edit')->with('todo', $todo);

    }

    public function update(Todos $todo, Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $todo->name = $request->name;
        $todo->description = $request->description;

        $todo->save();

        session()->flash('message', 'Todo has been updated successfully');
        return redirect('/todos');

    }

    public function destroy(Todos $todo){
        $todo->delete();
        session()->flash('message', 'Item has been deleted successfully');
        return redirect('/todos');
    }

    public function completed(Todos $todo){
        $todo->completed = true;
        $todo->save();

        session()->flash('message', 'Todo has been completed successfully');
        return redirect()->back();
    }
}
