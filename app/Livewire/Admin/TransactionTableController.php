<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class TransactionTableController extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.transaction-table-controller', [
            'users' => User::search($this->search)->paginate($this->perPage)
        ]);
    }
}
