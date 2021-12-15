<?php

namespace App\Http\Livewire\Armas;

use App\Models\Arma;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteArmas extends Component
{
    use WithFileUploads;

    public Arma $arma;
    public function render()
    {
        return view('livewire.armas.delete-armas');
    }

    public function delete(){
        $this->arma->delete();
        return redirect(route('indexarmas'));
    }
}
