<?php

namespace App\Livewire;

use Livewire\Component;
use Iluminate\Support\Arr;
use App\Models\FormField;

class Things extends Component
{
    public $things = [];

    public function mount()
    {
        $this->loadThings();
    }

    public function loadThings()
    {
        $this->things = FormField::all()->toArray();
    }

    public function reorder($orderedIds)
    {
        $this->things = collect($orderedIds)->map(function ($id) {
            return collect($this->things)->where('id', (int) $id['value'])->first();
        })->toArray();
    }

    public function render()
    {
        return view('livewire.things');
    }
}
