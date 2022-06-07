<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller {

    public function index() {
        $todos = Todos::all();
        return view('index')->with('todos', $todos);
    }

    public function store(Request $request) {
        $todo = new Todos;
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();

    }

    public function delete($id) {
        $todo = Todos::find($id);
        $todo->delete();
        return redirect()->back();
    }

    public function update($id) {
        $todo = Todos::find($id);
        return view('update')->with('todo', $todo);

    }

    public function save(Request $request, $id) {
        $todo = Todos::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        return redirect('todos');

    }

    public function completed($id) {
        $todo = Todos::find($id);
        $todo->completes = 1;
        $todo->save();
        return redirect()->back();
    }
}
