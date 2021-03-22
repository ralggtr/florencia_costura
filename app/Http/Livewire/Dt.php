<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Dt extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $origin = 0;
    public $sortField;
    public $sortAsc = true;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.dt', [
            'customers' => \App\Models\Customer::where('names','like','%'.$this->search.'%')
            ->orWhere('lastnames','like','%'.$this->search.'%')
            ->orWhere('area','like','%'.$this->search.'%')
            ->orWhere('address1','like','%'.$this->search.'%')
            ->orWhere('phone','like','%'.$this->search.'%')
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->paginate($this->perPage)
        ]);

        /* return view('livewire.dt', [
            'customers' => \App\Models\Customer::where('names','like','%'.$this->search.'%')
            ->orWhere('lastnames','like','%'.$this->search.'%')
            ->orWhere('address1','like','%'.$this->search.'%')
            ->orWhere('phone','like','%'.$this->search.'%')
            ->orderBy($this->sortField)
            ->paginate(5)
        ]); */

    }
}
