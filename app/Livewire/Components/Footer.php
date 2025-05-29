<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Footer extends Component
{
    public $email = '';
    public $subscribed = false;
    public $message = '';

    protected $rules = [
        'email' => 'required|email'
    ];

    public function subscribe()
    {
        $this->validate();

        // Logic untuk subscribe newsletter
        // Contoh: Newsletter::create(['email' => $this->email]);
        
        $this->subscribed = true;
        $this->message = 'Thank you for subscribing to our newsletter!';
        $this->email = '';
        
        // Reset after 3 seconds
        $this->dispatch('reset-message');
    }
    
    public function render()
    {
        return view('livewire.components.footer');
    }
}
