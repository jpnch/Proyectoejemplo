<?php

namespace App\Http\Livewire\Armas;

use App\Models\arma;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArmas extends Component
{
    public Arma $arma;
    use WithFileUploads;
    public $foto;

    public function mount()
    {
        $this->arma = new Arma();
    }

    public function render()
    {
        return view('livewire.armas.create-armas');
    }

    public function create()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->arma->foto = Storage::disk('public')->put('images/armas', $this->foto);
        }
        $this->arma->save();
        return redirect(route('indexarmas'));
    }
    protected function rules()
    {

        return rules::rulesarma();
    }
}
