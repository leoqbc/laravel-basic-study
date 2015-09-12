<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['titulo', 'descricao', 'prioridade', 'previsao'];
    
    public $timestamps=false;
    
    public function valid()
    {
        if ($this->validPrioridade()->fails()) {
            $this->erro = 'Prioridade inválida';
            return false;
        }
        return true;
    }
    
    public function validPrioridade()
    {
        return \Validator::make(
            ['prioridade' => $this->prioridade], 
            ['prioridade' => 'in:1,2,3']
        );
    }
    
}