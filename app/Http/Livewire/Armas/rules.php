<?php

namespace App\Http\Livewire\Armas;

class rules
{
    public static function rulesarma(){
        return [
            'arma.nombre'=> 'required',
            'arma.categoria'=> 'required',
            'arma.año'=>'required|numeric',
            'arma.precio'=>'required|numeric',
            'foto'=>'nullable|image'
            ];
    }

}
