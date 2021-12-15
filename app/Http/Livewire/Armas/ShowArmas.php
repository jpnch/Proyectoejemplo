<?php

namespace App\Http\Livewire\Armas;

use App\Models\Arma;
use Livewire\Component;

class ShowArmas extends Component
{
    public Arma $arma;
    public function render()
    {
        return view('livewire.armas.show-armas');
    }
}
