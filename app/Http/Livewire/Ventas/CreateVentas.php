<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Arma;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class CreateVentas extends Component
{
    public Venta $venta;

    public function mount()
    {
        $this->venta = new Venta();
    }
    public function render()
    {
        $armas = Arma::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.create-ventas', compact('armas', 'usuarios'));
    }

    public function crear()
    {
        $datos = $this->validate();
        if ($datos > 0) {
            $this->venta->save();
            return redirect(route('indexventas'));
        } else {
            $this->emit('ventavalidate', 'error, favor de seleccionar usuario y arma');
        }
    }

    public function rules()
    {
        return rules::rulesventas();
    }
}
