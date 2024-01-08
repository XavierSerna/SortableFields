<?php

// namespace App\Http\Livewire;
namespace App\Livewire;

use Livewire\Component;
use Iluminate\Support\Arr;

class Things extends Component
{
    public $things = [
        ['id' => 1, 'title' => 'Textarea'],
        ['id' => 2, 'title' => 'Checkbox'],
        ['id' => 3, 'title' => 'Radio'],
        ['id' => 4, 'title' => 'Dropdown'],
        ['id' => 5, 'title' => 'Email'],
    ];

    public function reorder($orderIds)
    {
        $this->things = collect($orderedIds)->map(function ($id) {
            return collect($this->things)->where('id', (int) $id)->first();
        })->toArray();
    }

    public function render()
    {
        return view('livewire.things');
    }
}
