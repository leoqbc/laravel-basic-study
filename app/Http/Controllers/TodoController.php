<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getIndex()
    {
        return $this->template('todo.index');
    }
    
    public function getLista()
    {
        return $this->template('todo.lista');
    }
    
    public function getCadastra()
    {
        return $this->template('todo.cadastra');
    }
    
    public function getVer($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return 'fazer view quando não achar';
        }
        return $this->template('todo.ver', ['todo' => $todo]);
    }
    
    public function postInsert(Request $req)
    {
        $todo = Todo::create($req->request->all());
        if ($todo->valid()) {
            $todo->save();
            return redirect('todo/lista');
        }
        $erro = $todo->erro;
        return $this->template('todo.cadastra', ['erro' => $erro]);
    }
}

