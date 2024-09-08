<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class Home extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'asc')->get();
        return view('livewire.home', compact('services'));
    }
}
