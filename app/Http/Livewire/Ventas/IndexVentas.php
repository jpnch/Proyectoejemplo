<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class IndexVentas extends Component
{
    use WithPagination;

    public $search;
    public $cargado = false;

    public function render()
    {
        $ventas = ($this->cargado == true) ? Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
            ->join('armas', 'ventas.id_arma', '=', 'armas.id')
            ->select(
                'ventas.*',
                'usuarios.nombre_usuario as nombre_usuario',
                'usuarios.email',
                'armas.nombre',

            )->paginate(10) : [];
        return view('livewire.ventas.index-ventas', compact('ventas'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
