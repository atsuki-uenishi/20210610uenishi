<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class todoController extends Controller
{
    public function index(Request $request) {
        //$contents = DB::table('todo')->get();
        $contents = Task::all();
        return view('index', ['contents' => $contents]);
    }

    public function create(Request $request) {
        $this->validate($request, Task::$rules);
        $todo = new Task;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function update(Request $request) {
        $this->validate($request, Task::$rules);
        $todo = Task::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function delete(Request $request) {
        Task::find($request->id)->delete();
        return redirect('/');
    }
}
