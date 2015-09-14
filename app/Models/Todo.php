<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todo extends Model
{
    protected $fillable = ['titulo', 'descricao', 'prioridade', 'previsao'];
    
    public $timestamps=false;
    
    public function valid()
    {
        $fields = $this->checkFields();
        if (!$fields->valid()) {
            foreach($fields->errors()->all() as $erro) { 
                $this->erro .= $erro . '<br>';
            }
            return false;
        }
        return true;
    }
    
    public function checkFields()
    {
        return \Validator::make([   
                'prioridade' => $this->prioridade, 
                'previsao' => $this->previsao
            ],[
                'prioridade' => 'in:1,2,3',
                'previsao' => 'date_format:d/m/Y H:i:s'
            ]
        );
    }
    
    public function setPrevisaoAttribute($data)
    {
//        $split_date = explode(' ', $data);
//        $date = vsprintf('%3$04d-%2$02d-%1$02d ', explode('/', $split_date[0]));
        $date = Carbon::createFromFormat('d/m/Y H:i:s', $data)
                    ->toDateTimeString();
        
        $this->attributes['previsao'] = $date;
    }
    
    public function getPrevisaoAttribute($data)
    {
        return date('d/m/Y H:i:s', strtotime($data));
    }
}
