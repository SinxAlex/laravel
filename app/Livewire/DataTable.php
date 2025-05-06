<?php

namespace App\Livewire;

use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url; // Добавляем это

class DataTable extends Component
{
    use WithPagination;

    #[Url] // Делаем свойство частью URL
    public $search = '';

    #[Url]
    public $sortField = 'id';

    #[Url]
    public $sortDirection = 'asc';

    #[Url]
    public $perPage = 10;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.data-table', [
            'items' => Jobs::query()
                ->when($this->search, function ($query) {
                    $query->where('title', 'like', '%'.$this->search.'%');
                })
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }

    public function show($id) {
        return redirect()->route('jobs.show', $id);
    }
    public function edit($id) {
        return redirect()->route('jobs.edit', $id);
    }
    public function delete($id) {
        if (!auth()->user()->hasRole('admin')) {
            abort(403, 'Доступ запрещён');
        }

        Jobs::destroy($id);
        session()->flash('success', 'Запись успешно удалена!');
        $this->resetPage();
    }





}
