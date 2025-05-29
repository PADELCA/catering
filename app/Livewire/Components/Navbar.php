<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $isOpen = false;
    public $activeDropdown = null;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function toggleDropdown($dropdown)
    {
        $this->activeDropdown = $this->activeDropdown === $dropdown ? null : $dropdown;
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}