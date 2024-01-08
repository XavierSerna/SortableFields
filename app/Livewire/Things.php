<?php

// namespace App\Http\Livewire;
namespace App\Livewire;

use Livewire\Component;
use Iluminate\Support\Arr;

class Things extends Component
{
    public $things = [
        ['id' => 1, 'type' => 'email', 'title' => 'Email'],
        ['id' => 2, 'type' => 'radio', 'title' => 'Radio'],
        ['id' => 3, 'type' => 'checkbox', 'title' => 'Checkbox'],
        ['id' => 4, 'type' => 'dropdown', 'title' => 'Dropdown'],
        ['id' => 5, 'type' => 'textarea', 'title' => 'Textarea'],
    ];
    
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
