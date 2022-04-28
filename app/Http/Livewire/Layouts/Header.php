<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Header extends Component
{
    public $active_role;

    protected $listeners = ['global_active_role'];

    public function global_active_role($role)
    {

        $this->active_role = $role;
    }

    public function mount($active_role)
    {
        $this->active_role = $active_role;
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
