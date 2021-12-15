<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class Deleteventas extends Component
{   public Venta $venta;
    public function render()
    {
        return view('livewire.ventas.deleteventas');
    }
    public function delete(){
        $this->venta->delete();
        return redirect(route('indexventas'));
    }
}
