<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class SideMenu extends Component
{
    public $menu_active_role;

    protected $listeners = ['global_active_role'];

    public function global_active_role($role)
    {
        $this->menu_active_role = $role;
    }

    public function mount($active_role)
    {
        $this->menu_active_role = $active_role;
    }

    public function render()
    {
        return view('livewire.layouts.side-menu');
    }
}
