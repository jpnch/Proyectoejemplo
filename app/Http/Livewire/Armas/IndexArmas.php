<?php

namespace App\Http\Livewire\Armas;

use App\Models\Arma;
use Livewire\Component;
use Livewire\WithPagination;

class IndexArmas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $armas = ($this->cargado == true) ? Arma::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('categoria', 'LIKE', '%' . $this->search . '%')
            ->orwhere('año', 'LIKE', '%' . $this->search . '%')
            ->orwhere('precio', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.armas.index-armas', compact('armas'));
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
