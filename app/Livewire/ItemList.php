<?php

namespace App\Livewire;

use App\Models\Jobs;
use Livewire\Component;

class ItemList extends Component
{
    public $items;
    public function mount()
    {
        $this->items = Jobs::all(); // Получаем все записи из таблицы jobs
    }
    public function render()
    {
        return view('livewire.item-list');
    }
}
