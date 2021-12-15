<?php

namespace App\Http\Livewire\Armas;

use App\Models\Arma;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArmas extends Component
{
    use WithFileUploads;
    public Arma $arma;
    public $foto;

    public function render()
    {
        return view('livewire.armas.edit-armas');
    }

    public function edit(){
        $this->validate();
        if($this->foto != null){
            if($this->arma->foto !=null){
                Storage::disk('public')->delete($this->foto);
            }
            $this->arma->foto = Storage::disk('public')->put('images/armas',$this->foto);
        }
        $this->arma->save();
        return redirect(route('indexarmas'));
    }
    protected function rules(){
        return rules::rulesarma();
    }
}
