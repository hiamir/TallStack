<?php

namespace App\Http\Livewire\Auth\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $active_role = 'admin';

    protected $listeners = ['active_role'];

    public function active_role($role)
    {

        $this->active_role = $role;
        $this->emit('global_active_role', $role);
    }

    public function mount()
    {
        $this->emit('global_active_role', $this->active_role);
    }

    public function render()
    {
        return view('livewire.auth.admin.dashboard');
    }
}
